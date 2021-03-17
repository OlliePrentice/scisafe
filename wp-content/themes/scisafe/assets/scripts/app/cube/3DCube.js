import * as THREE from 'three';
import { OrbitControls } from './OrbitControls';
import ParticleWaves from './particleWaves';
import thumbs from './cubeData';
import gsap from 'gsap';

// ANIM VAR
let frame = 0;

//GET pop_Up
const pop_Up = document.querySelector('.pop_up');
const homeCube = document.querySelector('.home_cube');
let isVisible = false;

// SET raycaster
const raycaster = new THREE.Raycaster();
const mouse = new THREE.Vector2();

//SET renderer
const renderer = new THREE.WebGLRenderer();
renderer.setSize( window.innerWidth, window.innerHeight );
renderer.shadowMap.enabled = true;
renderer.shadowMap.type = THREE.PCFSoftShadowMap;

if(homeCube) {
    // APPEND canvas
    homeCube.prepend( renderer.domElement );
    // CREATE event Desktop
    document.querySelector( 'canvas' ).addEventListener( 'click', (e) => intersect(e), false );
    // CREATE event Mobile
    document.querySelector( 'canvas' ).addEventListener( 'touchstart', (e) => intersect(e), false );
}

// RESIZE canvas on window resize
window.addEventListener( 'resize', () => {
  renderer.setSize( window.innerWidth, window.innerHeight );
  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();
});

// SET Scene
const scene = new THREE.Scene();
scene.background = new THREE.Color(0xFFFFFF);
const camera = new THREE.PerspectiveCamera( 35, window.innerWidth / window.innerHeight, 0.1, 1000 );

// Load Particles
const particles = new ParticleWaves({
  mainScene: scene
});

particles.init();


//SET Orbit controls
const controls = new OrbitControls( camera, renderer.domElement );
controls.enableDamping = true;
controls.dampingFactor = 0.1;
controls.enableZoom = false;
controls.mouseButtons = {
	LEFT: THREE.MOUSE.ROTATE,
	MIDDLE: null,
	RIGHT: null
};

camera.position.set(-5, 4, 8);
controls.update();

// SET ambient light
// scene.add( new THREE.AmbientLight( 'lightblue', 0.5))

// SET directional light
const dirLight = new THREE.DirectionalLight( 'lightblue', 1);
dirLight.position.set( 0, 10, 0 );
dirLight.castShadow = true;
dirLight.shadow.mapSize.width = 1024;
dirLight.shadow.mapSize.height = 1024;
dirLight.shadow.mapSize.far = 50;
dirLight.shadow.mapSize.left = 10;
dirLight.shadow.mapSize.right = 10;
dirLight.shadow.mapSize.top = 10;
dirLight.shadow.mapSize.bottom = 10;
scene.add( dirLight );

// CREATE plane
const planeGeometry = new THREE.PlaneBufferGeometry( 400, 400 );
const planeMaterial = new THREE.ShadowMaterial();
planeMaterial.opacity = 0.3;
const plane = new THREE.Mesh( planeGeometry, planeMaterial );
plane.rotation.set( -Math.PI / 2, 0, 0 );
plane.position.set( 0, -1.2, 0 );
// plane.receiveShadow = true;
scene.add( plane );

// FUNCTION Intersect
const intersect = (event) => {
  
  const client = event.type === 'touchstart' ? event.touches[0] : event;

  mouse.x = (client.clientX / window.innerWidth) * 2 - 1;
  mouse.y = -(client.clientY / window.innerHeight) * 2 + 1;

  raycaster.setFromCamera( mouse, camera );
  const intersectCheck = raycaster.intersectObjects( [ ...mainCube.children, mainCube ] );

  if ( intersectCheck.length > 0 && intersectCheck[0].object.name !== 'main_cube' ) {
    pannelSwap( intersectCheck[0].object.userData );
  }

};

// FUNCTION swap pannel
const pannelSwap = ( copy ) => {

  if( isVisible ) {
    gsap.to( '.pop_up', { opacity: 0, duration: 0.7});
  }
  gsap.to( '.pop_up', { opacity: 1, duration: 0.7, delay: (isVisible ? 0.7 : 0) , onStart: () => {
      pop_Up.style.display = 'block';
      pop_Up.children[0].innerHTML = copy.title;
      pop_Up.children[1].innerHTML = copy.desc;
      isVisible = true;
  }});

};

// FUNCTION to create cubes
const createCube = ( 
  size,
  texture,
  opacity,
  parent,
  castShadow,
  position = [0, 0, 0],
  rotation = [0, 0, 0] ) => {

  const geometry = new THREE.BoxBufferGeometry( ...size );
  const material =  new THREE.MeshBasicMaterial( texture.length > 10 ? {map: new THREE.TextureLoader().load( texture ), side: THREE.DoubleSide } : { color: texture } );

  material.transparent = opacity ? true : false;
  material.opacity = opacity;

  const cube = new THREE.Mesh( geometry, material );
  cube.position.set( position[0], position[1], position[2] );
  cube.rotation.set( rotation[0], rotation[1], rotation[2] );
  cube.castShadow = castShadow;
  parent.add( cube );

  return cube;
};


// CREATE MainCube
const mainCube = createCube( [ 2, 2, 2 ], theme_params.stylesheet_dir + '/assets/images/cube_material.png', 1, scene, true, [ 0, 0.5, 0 ] );
mainCube.name = 'main_cube';
dirLight.target = mainCube;
// CREATE Thumbs
const thumbsList = thumbs.map( thumb => {
  const thumbInst = createCube( thumb.size, 0x00ACE5, 0.7, mainCube, false , thumb.position, thumb.rotation );
  thumbInst.userData = { ...thumb.copy };
  return thumbInst;
  }
);

// thumbsList.push( mainCube );

// CREATE S LOGO
new THREE.FontLoader().load( theme_params.stylesheet_dir + '/assets/fonts/helvetiker_bold.typeface.json', (font) => {
  
  let sGeometry = new THREE.TextGeometry( 'S', {
    font: font,
    size: 1,
		height: 0.2,
  });


  sGeometry.computeBoundingBox();
  sGeometry.computeVertexNormals();
  //sGeometry = new THREE.BufferGeometry().fromGeometry( sGeometry );
  const xOffset = - 0.5 * ( sGeometry.boundingBox.max.x - sGeometry.boundingBox.min.x );
  const yOffset = - 0.5 * ( sGeometry.boundingBox.max.y - sGeometry.boundingBox.min.y );
  const sMaterial = new THREE.MeshBasicMaterial( { color: 0X004783, opacity: 1 } );
  const mesh = new THREE.Mesh(
    sGeometry,
    sMaterial
  );
  mainCube.add( mesh );
  mesh.position.x = xOffset;
  mesh.position.y = yOffset;
});



// render scene
const ThreeCube = () => {
  renderer.render( scene, camera );
  particles.render();
  controls.update();

 thumbsList.map( thumb => {
  let amount = ( Math.sin( frame ) );
  thumb.scale.set( amount, amount, amount ) ;
  frame += 0.005;
 });

  requestAnimationFrame( ThreeCube );
};

// RUN scene
 export default ThreeCube;
