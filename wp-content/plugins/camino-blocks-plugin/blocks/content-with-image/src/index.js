import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';

registerBlockType( 'camino-blocks-plugin/content-with-image', {
	edit: Edit
} );