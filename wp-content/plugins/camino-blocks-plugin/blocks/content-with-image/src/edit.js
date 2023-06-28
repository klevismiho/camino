import { __ } from '@wordpress/i18n';
import { __experimentalGetSettings } from '@wordpress/date';
import { useBlockProps, MediaUpload, MediaUploadCheck, RichText, InspectorControls } from '@wordpress/block-editor';
import { Button, ExternalLink, TextControl, PanelBody, PanelRow, ToggleControl } from '@wordpress/components';
import './editor.scss';

export default function Edit({attributes, setAttributes}) {

	const {title, subtitle, content, image, link, linklabel} = attributes;

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
		<section {...useBlockProps()}>
			<div class="column content-column">
				<div class="inner">
					<RichText
						tagName="h6"
						value={subtitle}
						onChange={ (value) => setAttributes({subtitle: value}) }
						placeholder={ __('Subtitle here') }
					/>
					<RichText
						tagName="h2"
						value={title}
						onChange={ (value) => setAttributes({title: value}) }
						placeholder={ __('Title here') }
					/>
					<RichText
						tagName="p"
						value={content}
						onChange={ (value) => setAttributes({content: value}) }
						placeholder={ __('Content here') }
					/>
					<ExternalLink 
						href={ link }
						className="button"
					>
						{ linklabel }
					</ExternalLink>
				</div>
			</div>
			<div className="column image-column">
				<MediaUploadCheck>
					<MediaUpload
						className="js-book-details-image wp-admin-book-details-image"
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
			</div>
		</section>
		</>
	);
}
