import { __ } from '@wordpress/i18n';
import { useBlockProps, RichText, MediaUploadCheck, MediaUpload } from '@wordpress/block-editor';
import { Placeholder, Button } from '@wordpress/components';
import './editor.scss';


export default function Edit({attributes, setAttributes}) {

	const {title, subtitle, image, content, link} = attributes;

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
		<section { ...useBlockProps() }>
			<div className="container">
				<div className="card">
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
						Find Out More
					</Button>
				</div>
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
		</section>
	);
}