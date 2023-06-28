import { __ } from '@wordpress/i18n';
import { RawHTML } from '@wordpress/element';
import { RichText, useBlockProps } from '@wordpress/block-editor';
import { useSelect } from '@wordpress/data';
import './editor.scss';

export default function Edit({attributes, setAttributes}) {

	const { title, content } = attributes;

	const posts = useSelect(
		(select) => {
			return select('core').getEntityRecords('postType', 'service', {
				per_page: 3, 
				_embed: true,
			});
	});

	return (
		<section {...useBlockProps()}>
			<div className="container">
				<div className="first item">
					<RichText
						tagName="h2"
						value={title}
						onChange={ (value) => setAttributes({ title: value }) }
						placeholder={ __('Title' ) }
					/>
					<RichText
						tagName="p"
						value={content}
						onChange={ (value) => setAttributes({ content: value }) }
						placeholder={ __('Content' ) }
					/>
				</div>
				{posts && posts.map((post) => { 
					const featuredImage =
						post._embedded &&
						post._embedded['wp:featuredmedia'] &&
						post._embedded['wp:featuredmedia'].length > 0 &&
						post._embedded['wp:featuredmedia'][0];
					return (
						<div className="item" key={post.id}>
							{featuredImage && 
								<img 
								src={featuredImage.source_url} 
								alt={featuredImage.alt_text}
								/>
							}
							<div className="item-content">
								<h3>{post.title.rendered}</h3>
								{post.excerpt.rendered &&
									<RawHTML>
										{post.excerpt.rendered}
									</RawHTML>
								}
							</div>
						</div>
					)
				})}
			</div>
		</section> 
	);
}
