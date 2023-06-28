import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';

registerBlockType( 'camino-blocks-plugin/community-research', {
	edit: Edit
} );
