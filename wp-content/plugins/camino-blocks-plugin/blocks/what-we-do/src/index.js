import { registerBlockType } from '@wordpress/blocks';
import './style.scss';
import Edit from './edit';
import save from './save';

registerBlockType( 'camino-blocks-plugin/what-we-do', {
	edit: Edit
} );
