import { __ } from '@wordpress/i18n';
import { __experimentalGetSettings } from '@wordpress/date';
import { useBlockProps, MediaUpload, MediaUploadCheck, RichText, InspectorControls } from '@wordpress/block-editor';
import { Button, ExternalLink, TextControl, PanelBody, PanelRow, ToggleControl } from '@wordpress/components';
import './editor.scss';

export default function Edit({attributes, setAttributes}) {

	const {title_1, title_2, title_3, content_1, content_2, content_3, image_1, image_2, image_3, link_1, link_2, link_3 } = attributes;

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
							label={__( 'Link 1' )}
							value={ link_1 }
							onChange={ (value) => setAttributes({link_1: value}) }
						/>
					</fieldset>
				</PanelRow>
				<PanelRow>
					<fieldset>
						<TextControl
							label={__( 'Link 2' )}
							value={ link_2 }
							onChange={ (value) => setAttributes({link_2: value}) }
						/>
					</fieldset>
				</PanelRow>
				<PanelRow>
					<fieldset>
						<TextControl
							label={__( 'Link 3' )}
							value={ link_3 }
							onChange={ (value) => setAttributes({link_3: value}) }
						/>
					</fieldset>
				</PanelRow>
			</PanelBody>
		</InspectorControls>
		<section {...useBlockProps()}>
			<div className="services-grid">
				<div className="service-item">
					<MediaUploadCheck>
						<MediaUpload
							className="js-book-details-image wp-admin-book-details-image"
							allowedTypes={['image']}
							multiple={false}
							value={image_1 ? image_1.id : ''}
							onSelect={image_1 => setAttributes({ image_1: image_1 })}
							render={({ open }) => (
							image_1 ?
								<div>
								<p>
									<img src={image_1.url} width={image_1.width / 2} />
								</p>

								<p>
									<Button onClick={() => setAttributes({ image_1: '' })} className="button is-small">Remove</Button>
								</p>
								</div> :
								<Button onClick={open} className="button">Upload Image</Button>
							)}
						/>
					</MediaUploadCheck>
					<div class="item-content">
						<RichText
							tagName="h3"
							value={title_1}
							onChange={ (value) => setAttributes({ title_1: value })}
							placeholder={ __('Title')}
						/>
						<RichText
							tagName="p"
							value={content_1}
							onChange={ ( value ) => setAttributes({ content_1: value }) }
							placeholder={ __('Content')}
						/>
					</div>
				</div>
				<div className="service-item">
					<MediaUploadCheck>
						<MediaUpload
							className="js-book-details-image wp-admin-book-details-image"
							allowedTypes={['image']}
							multiple={false}
							value={image_2 ? image_2.id : ''}
							onSelect={image_2 => setAttributes({ image_2: image_2 })}
							render={({ open }) => (
							image_2 ?
								<div>
								<p>
									<img src={image_2.url} width={image_2.width / 2} />
								</p>

								<p>
									<Button onClick={() => setAttributes({ image_2: '' })} className="button is-small">Remove</Button>
								</p>
								</div> :
								<Button onClick={open} className="button">Upload Image</Button>
							)}
						/>
					</MediaUploadCheck>
					<div class="item-content">
						<RichText
							tagName="h3"
							value={title_2}
							onChange={ (value) => setAttributes({ title_2: value })}
							placeholder={ __('Title')}
						/>
						<RichText
							tagName="p"
							value={content_2}
							onChange={ ( value ) => setAttributes({ content_2: value }) }
							placeholder={ __('Content')}
						/>
					</div>
				</div>
				<div className="service-item">
					<MediaUploadCheck>
						<MediaUpload
							className="js-book-details-image wp-admin-book-details-image"
							allowedTypes={['image']}
							multiple={false}
							value={image_3 ? image_3.id : ''}
							onSelect={image_3 => setAttributes({ image_3: image_3 })}
							render={({ open }) => (
							image_3 ?
								<div>
								<p>
									<img src={image_3.url} width={image_3.width / 2} />
								</p>

								<p>
									<Button onClick={() => setAttributes({ image_3: '' })} className="button is-small">Remove</Button>
								</p>
								</div> :
								<Button onClick={open} className="button">Upload Image</Button>
							)}
						/>
					</MediaUploadCheck>
					<div class="item-content">
						<RichText
							tagName="h3"
							value={title_3}
							onChange={ (value) => setAttributes({ title_3: value })}
							placeholder={ __('Title')}
						/>
						<RichText
							tagName="p"
							value={content_3}
							onChange={ ( value ) => setAttributes({ content_3: value }) }
							placeholder={ __('Content')}
						/>
					</div>
				</div>
			</div>
		</section>
		</>
	);
}
