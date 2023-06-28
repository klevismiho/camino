import { registerBlockType } from '@wordpress/blocks';
import './style.scss';
import Edit from './edit';

registerBlockType( 'camino-blocks-plugin/statistics', {
	edit: Edit
} );