import { __ } from '@wordpress/i18n';
import { RawHTML } from '@wordpress/element';
import { format, dateI18n, __experimentalGetSettings } from '@wordpress/date';
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, ToggleControl, QueryControls } from '@wordpress/components';
import { useSelect } from '@wordpress/data';
import './editor.scss';

export default function Edit() {

	return (
		<div {...useBlockProps()}>
			<div class="content">
				<p>Slider of event brite events</p>
			</div>
		</div> 
	);
}
