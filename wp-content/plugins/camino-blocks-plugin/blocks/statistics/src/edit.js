import { __ } from '@wordpress/i18n';
import { useBlockProps, RichText, InspectorControls } from '@wordpress/block-editor';
import { Button, ExternalLink, CheckboxControl, TextControl, PanelBody, PanelRow } from '@wordpress/components';
import './editor.scss';


export default function Edit({attributes, setAttributes}) {

	const {
		title, 
		content, 
		link,
		linklabel
	} = attributes;

	return (
		<>
		<InspectorControls>
			<PanelBody 
			title={ __( 'Link Settings', 'camino-blocks-plugin' )}
			initialOpen={true}
		>
				<PanelRow>
					<fieldset>
						<TextControl
							label={__( 'Button Link' )}
							value={ link }
							onChange={ (value) => setAttributes({link: value}) }
						/>
					</fieldset>
				</PanelRow>
				<PanelRow>
					<fieldset>
						<TextControl
							label={__( 'Link label' )}
							value={ linklabel }
							onChange={ (value) => setAttributes({linklabel: value}) }
						/>
					</fieldset>
				</PanelRow>
			</PanelBody>
		</InspectorControls>
		<section { ...useBlockProps() }> 
			<div className="item first">
				<RichText
					tagName="h2"
					value={ title }
					onChange={ ( value ) => setAttributes( { title: value } ) } 
					placeholder={ __( 'Heading...' ) }
				/>
				<RichText
					tagName="p"
					value={content}
					onChange={ (value) => setAttributes( { content: value }) }
					placeholder={ __( 'Content...' ) }
				/>
			</div>
			<ExternalLink 
				href={ link }
				className="button"
			>
				{ linklabel }
			</ExternalLink>
		</section>
		</>
	);
}