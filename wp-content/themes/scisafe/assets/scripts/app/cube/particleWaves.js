import * as THREE from 'three';
import { vertexShader, fragmentShader } from './shaders';

const SEPARATION = 1, AMOUNTX = 200, AMOUNTY = 200;
let particles, count = 0;

export default class ParticlesWaves {

    constructor( props ) {
        this.scene = props.mainScene
    }

    init() {

        const numParticles = AMOUNTX * AMOUNTY;
    
        const positions = new Float32Array( numParticles * 3 );
        const scales = new Float32Array( numParticles );
    
        let i = 0, j = 0;
    
        for ( let ix = 0; ix < AMOUNTX; ix ++ ) {
    
            for ( let iy = 0; iy < AMOUNTY; iy ++ ) {
    
                positions[ i ] = ix * SEPARATION - ( ( AMOUNTX * SEPARATION ) / 2 ); // x
                positions[ i + 1 ] = 0; // y
                positions[ i + 2 ] = iy * SEPARATION - ( ( AMOUNTY * SEPARATION ) / 2 ); // z
    
                scales[ j ] = 1;
    
                i += 3;
                j ++;
    
            }
    
        }
    
        const geometry = new THREE.BufferGeometry();
        geometry.setAttribute( 'position', new THREE.BufferAttribute( positions, 3 ) );
        geometry.setAttribute( 'scale', new THREE.BufferAttribute( scales, 1 ) );
    
        const material = new THREE.ShaderMaterial({
    
            uniforms: {
                color: { value: new THREE.Color( 0x375CA5 ) },
            },
            vertexShader: vertexShader,
            fragmentShader: fragmentShader
    
        });
    
        particles = new THREE.Points( geometry, material );
        this.scene.add( particles );
        
        particles.position.y = -3;
        //console.log( particles.geometry );
    }

    render() {

        const positions = particles.geometry.attributes.position.array;
        const scales = particles.geometry.attributes.scale.array;

        let i = 0, j = 0;

        for ( let ix = 0; ix < AMOUNTX; ix ++ ) {

            for ( let iy = 0; iy < AMOUNTY; iy ++ ) {

                positions[ i + 1 ] = ( Math.sin( ( ix + count ) * 0.2 ) * 1 ) +
                                ( Math.sin( ( iy + count ) * 0.2 ) * 1 );

                scales[ j ] = ( Math.sin( ( ix + count ) * 0.1 ) + 1 ) * 0.1 +
                                ( Math.sin( ( iy + count ) * 0.2 ) + 1 ) * 0.1;

                i += 3;
                j ++;

            }

        }

        particles.geometry.attributes.position.needsUpdate = true;
        particles.geometry.attributes.scale.needsUpdate = true;

        count += 0.05;

    }

}