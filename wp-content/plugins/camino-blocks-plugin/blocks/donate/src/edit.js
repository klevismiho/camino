import { __ } from '@wordpress/i18n';
import { useBlockProps, MediaUpload, MediaUploadCheck, RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import './editor.scss';

export default function Edit({attributes, setAttributes}) {

	const {title, image, content} = attributes;

	return (
		<section {...useBlockProps}>
			<div className="column image-column">
				<div className="inner">
					<RichText
						tagName="h2"
						value={title}
						onChange={ (value) => setAttributes({ title: value })}
						placeholder={ __('Title here' )}
					/>	
					<RichText
						tagName="p"
						value={content}
						onChange={ (value) => setAttributes({ content: value })}
						placeholder={ __('Content here' )}
					/>	
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
				</div>
			</div>
		</section>
	);
}
