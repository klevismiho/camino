import { __ } from '@wordpress/i18n';
import { useBlockProps, MediaUpload, MediaUploadCheck, RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import './editor.scss';


export default function Edit({attributes, setAttributes}) {

	const {
		title, 
		content, 
		subtitle_1,
		subtitle_2,
		subtitle_3,
		subtitle_4,
		image_1,
		image_2,
		image_3,
		image_4
	} = attributes;

	return (
		<section { ...useBlockProps() }>
			<div className="columns">
				<div className="column">
					<RichText
						tagName="h2"
						value={title}
						onChange={ ( value ) => setAttributes({ title: value }) }
						placeholder={ __( 'Title here' )}
					/>
				</div>
				<div className="column">
					<ul>
						<li>
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
											<img src={image_1.url} />
											<Button onClick={() => setAttributes({ image_1: '' })} className="button is-small">Remove</Button>
										</div> :
										<Button onClick={open} className="button">Upload Image</Button>
									)}
								/>
							</MediaUploadCheck>
							<RichText
								tagName="h5"
								value={subtitle_1}
								onChange={ ( value ) => setAttributes({ subtitle_1: value }) }
								placeholder={ __( 'Title here' )}
							/>
						</li>
						<li>
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
											<img src={image_2.url} />
											<Button onClick={() => setAttributes({ image_2: '' })} className="button is-small">Remove</Button>
										</div> :
										<Button onClick={open} className="button">Upload Image</Button>
									)}
								/>
							</MediaUploadCheck>
							<RichText
								tagName="h5"
								value={subtitle_2}
								onChange={ ( value ) => setAttributes({ subtitle_2: value }) }
								placeholder={ __( 'Title here' )}
							/>
						</li>
						<li>
							<MediaUploadCheck>
								<MediaUpload
									className="image-3 wp-admin-book-details-image"
									allowedTypes={['image']}
									multiple={false}
									value={image_3? image_3.id : ''}
									onSelect={image_3 => setAttributes({ image_3: image_3 })}
									render={({ open }) => (
									image_3 ?
										<div>
											<img src={image_3.url} />
											<Button onClick={() => setAttributes({ image_3: '' })} className="button is-small">Remove</Button>
										</div> :
										<Button onClick={open} className="button">Upload Image</Button>
									)}
								/>
							</MediaUploadCheck>
							<RichText
								tagName="h5"
								value={subtitle_3}
								onChange={ ( value ) => setAttributes({ subtitle_3: value }) }
								placeholder={ __( 'Title here' )}
							/>
						</li>
						<li>
							<MediaUploadCheck>
								<MediaUpload
									className="image-4 wp-admin-book-details-image"
									allowedTypes={['image']}
									multiple={false}
									value={image_4? image_4.id : ''}
									onSelect={image_4 => setAttributes({ image_4: image_4 })}
									render={({ open }) => (
									image_4 ?
										<div>
											<img src={image_4.url} />
											<Button onClick={() => setAttributes({ image_4: '' })} className="button is-small">Remove</Button>
										</div> :
										<Button onClick={open} className="button">Upload Image</Button>
									)}
								/>
							</MediaUploadCheck>
							<RichText
								tagName="h5"
								value={subtitle_4}
								onChange={ ( value ) => setAttributes({ subtitle_4: value }) }
								placeholder={ __( 'Title here' )}
							/>
						</li>
					</ul>
				</div>
			</div>
		</section>
	);
}