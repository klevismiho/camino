import { __ } from '@wordpress/i18n';
import { RawHTML } from '@wordpress/element';
import { format, dateI18n, __experimentalGetSettings } from '@wordpress/date';
import { useBlockProps, RichText } from '@wordpress/block-editor';
import { PanelBody, ToggleControl, QueryControls } from '@wordpress/components';
import { useSelect } from '@wordpress/data';
import './editor.scss';

export default function Edit({attributes, setAttributes}) {

	return (
		<section  {...useBlockProps()}>
			<div className="container">
				<div className="slide-wrapper">
					<div className="slide-content">
						<h3>1997</h3>
						<p>Camino began in 1997 as World Reach Incorporated, the largest donor of medical supplies from the United States to Cuba.</p>
					</div>
				</div>
			</div>
		</section>
	);
}
