import { __ } from '@wordpress/i18n';
import { __experimentalGetSettings } from '@wordpress/date';
import { useBlockProps, MediaUpload, MediaUploadCheck, RichText, InspectorControls } from '@wordpress/block-editor';
import { Button, ExternalLink, CheckboxControl, TextControl, PanelBody, PanelRow } from '@wordpress/components';
import './editor.scss';



export default function Edit({attributes, setAttributes}) {

	const {title, subtitle, content, image, link, linklabel, fullBackground, halfBackground} = attributes;

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
		<section className="section-about" { ...useBlockProps() }>
			<div className="container">
				<MediaUploadCheck>
					<MediaUpload
						className="image-upload"
						allowedTypes={['image']}
						multiple={false}
						value={image ? image.id : ''}
						onSelect={image => setAttributes({ image: image })}
						render={({ open }) => (
						image ?
							<div>
							<p>
								<img src={image.url} width={image.width / 2} />
							</p>

							<p>
								<Button onClick={() => setAttributes({ image: '' })} className="button is-small">Remove</Button>
							</p>
							</div> :
							<Button onClick={open} className="button">Upload Image</Button>
						)}
					/>
				</MediaUploadCheck>
				<div className="card">
					<RichText
						tagName="h6"
						onChange={ (value) => setAttributes({ subtitle: value })}
						value={subtitle}
						placeholder={ __('Subtitle') }
					/>
					<RichText
						tagName="h2"
						onChange={ (value) => setAttributes({ title: value })}
						value={title}
						placeholder={ __('Title') }
					/>
					<RichText
						tagName="p"
						onChange={ (value) => setAttributes({ content: value })}
						value={content}
						placeholder={ __('Content') }
					/>
					<ExternalLink 
						href={ link }
						className="button"
					>
						{ linklabel }
					</ExternalLink>
				</div>
			</div>
		</section>
		</>
	);
}