import { __ } from '@wordpress/i18n';
import { __experimentalGetSettings } from '@wordpress/date';
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, PanelRow, CheckboxControl } from '@wordpress/components';
import './editor.scss';

export default function Edit({attributes, setAttributes}) {

	const { fullBackground, halfBackground } = attributes;

	return (
		<>
		<InspectorControls>
			<PanelBody title="Section Settings" initialOpen={ true }>
				<PanelRow>
					<CheckboxControl
						label="Add background"
						help="This is the light full background"
						onChange={ () => setAttributes( { fullBackground: ! fullBackground } ) }
						checked={ fullBackground }
					/>
				</PanelRow>
				<PanelRow>
					<CheckboxControl
						label="Add half background"
						help="This is the light half full background"
						onChange={ () => setAttributes( { halfBackground: ! halfBackground } ) }
						checked={ halfBackground }
					/>
				</PanelRow>
			</PanelBody>
		</InspectorControls>
		<section {...useBlockProps()}>
			<div className="container">
				<div className="slide-wrapper">
					<div className="slide-content">
						<h6>Our Values</h6>
						<h3>We make Soup Not Salad</h3>
						<p>A salad can never offer true unity–ingredients are tossed together to make a plate of separate pieces. Instead, we are a soup. Each person brings their unique flavor to the bowl, but we are one unified dish. </p>
					</div>
				</div>
			</div>
		</section>
		</>
	);
}
