import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import './editor.scss';

export default function Edit() {

	return (
		<section {...useBlockProps()}>
			<h1>The contact form will be rendered in the frontend</h1>
		</section>
	);
}
