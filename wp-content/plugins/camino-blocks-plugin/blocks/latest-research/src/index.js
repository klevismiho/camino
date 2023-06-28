import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';

registerBlockType( 'camino-blocks-plugin/latest-research', {
	edit: Edit
} );