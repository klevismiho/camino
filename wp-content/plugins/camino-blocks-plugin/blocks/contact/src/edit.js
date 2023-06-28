import { __ } from '@wordpress/i18n';
import { useBlockProps, MediaUpload, MediaUploadCheck, RichText, InspectorControls} from '@wordpress/block-editor';
import { Button, TextControl, PanelBody, PanelRow } from '@wordpress/components';
import './editor.scss';


export default function Edit({attributes, setAttributes}) {

	const {title, subtitle, image, content, link_1, link_2, linklabel_1, linklabel_2} = attributes;

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
					<fieldset>
						<TextControl
							label={__( 'Button 1 Link' )}
							value={ link_1 }
							onChange={ (value) => setAttributes({link_1: value}) }
						/>
					</fieldset>
				</PanelRow>
				<PanelRow>
					<fieldset>
						<TextControl
							label={__( 'Link label 1' )}
							value={ linklabel_1 }
							onChange={ (value) => setAttributes({linklabel_1: value}) }
						/>
					</fieldset>
				</PanelRow>
				<PanelRow>
					<fieldset>
						<TextControl
							label={__( 'Button 2 Link' )}
							value={ link_2 }
							onChange={ (value) => setAttributes({link_2: value}) }
						/>
					</fieldset>
				</PanelRow>
				<PanelRow>
					<fieldset>
						<TextControl
							label={__( 'Link label 2' )}
							value={ linklabel_2 }
							onChange={ (value) => setAttributes({linklabel_2: value}) }
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
						href={link_1}
					>
						{ linklabel_1 }
					</Button>
					<Button
						variant="primary"
						href={link_2}
					>
						{ linklabel_2 }
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