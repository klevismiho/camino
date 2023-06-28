import { __ } from '@wordpress/i18n';
import { useBlockProps, MediaUpload, MediaUploadCheck, RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import './editor.scss';


export default function Edit({attributes, setAttributes}) {

	const {
		title, 
		subtitle_1,
		subtitle_2,
		image_1,
		image_2
	} = attributes; 

	return (
		<section { ...useBlockProps() }>
			<RichText
				tagName="h2"
				value={title}
				onChange={ (value) => setAttributes({ title: value }) }
				placeholder={ __('Title') }
			/>
			<div className="container">
				<div className="item" style={image_1 ? {backgroundImage: `url(${image_1.url})`} : null}>
					<div className="item-content">
						<RichText
							tagName="h3"
							value={subtitle_1}
							onChange={ (value) => setAttributes({ subtitle_1: value }) }
							placeholder={ __('Title') }
						/>
						<MediaUploadCheck>
							<MediaUpload
								className="image-1 wp-admin-book-details-image"
								allowedTypes={['image']}
								multiple={false}
								value={image_1? image_1.id : ''}
								onSelect={image_1 => setAttributes({ image_1: image_1 })}
								render={({ open }) => (
								image_1 ?
									<div>
									<p>
										<Button onClick={() => setAttributes({ image_1: '' })} className="button is-small">Remove</Button>
									</p>
									</div> :
									<Button onClick={open} className="button">Upload Image</Button>
								)}
							/>
						</MediaUploadCheck>
					</div>
				</div>
				<div className="item" style={image_2 ? {backgroundImage: `url(${image_2.url})`} : null}>
					<div className="item-content">
						<RichText
							tagName="h3"
							value={subtitle_2}
							onChange={ (value) => setAttributes({ subtitle_2: value }) }
							placeholder={ __('Title') }
						/>
						<MediaUploadCheck>
							<MediaUpload
								className="image-2 wp-admin-book-details-image"
								allowedTypes={['image']}
								multiple={false}
								value={image_2? image_2.id : ''}
								onSelect={image_2 => setAttributes({ image_2: image_2 })}
								render={({ open }) => (
								image_2 ?
									<div>
									<p>
										<Button onClick={() => setAttributes({ image_2: '' })} className="button is-small">Remove</Button>
									</p>
									</div> :
									<Button onClick={open} className="button">Upload Image</Button>
								)}
							/>
						</MediaUploadCheck>
					</div>
				</div>
			</div>
		</section>

	);
}