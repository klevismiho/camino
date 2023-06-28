import { __ } from '@wordpress/i18n';
import { useBlockProps, MediaUpload, MediaUploadCheck, RichText, InspectorControls } from '@wordpress/block-editor';
import { Button, ExternalLink, CheckboxControl, TextControl, PanelBody, PanelRow } from '@wordpress/components';
import './editor.scss';


export default function Edit({attributes, setAttributes}) {

	const {title, subtitle, image, content, link, linklabel, fullBackground, halfBackground, halfTopBackground} = attributes;

	const onChangeTitle = (value) => {
		setAttributes({title: value});
	};
	const onChangeSubTitle = (value) => {
		setAttributes({subtitle: value});
	};
	const onChangeContent = (value) => {
		setAttributes({content: value});
	};

	return (
		<>
		<InspectorControls>
			<PanelBody 
				title={ __( 'Section Settings', 'camino-blocks-plugin' )}
				initialOpen={true}
			>
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
						help="This is the light half background"
						onChange={ () => setAttributes( { halfBackground: ! halfBackground } ) }
						checked={ halfBackground }
					/>
				</PanelRow>
				<PanelRow>
					<CheckboxControl
						label="Add half top background"
						help="This is the light half top background"
						onChange={ () => setAttributes( { halfTopBackground: ! halfTopBackground } ) }
						checked={ halfTopBackground }
					/>
				</PanelRow>
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
			<div class="container" style={image ? {backgroundImage: `url(${image.url})`} : null}>
				<div class="content">
					<RichText
						tagName="h6"
						onChange={onChangeSubTitle}
						value={subtitle}
					/>
					<RichText
						tagName="h2"
						onChange={onChangeTitle}
						value={title}
					/>
					<RichText
						tagName="p"
						onChange={onChangeContent}
						value={content}
					/>
					<Button
						variant="primary"
						href={link}
					>
						{ linklabel }
					</Button>
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
									<Button onClick={() => setAttributes({ image: '' })} className="button is-small">Remove</Button>
								</p>
								</div> :
								<Button onClick={open} className="button">Upload Image</Button>
							)}
						/>
					</MediaUploadCheck>
				</div>
			</div>
		</section>
		</>
	);
}