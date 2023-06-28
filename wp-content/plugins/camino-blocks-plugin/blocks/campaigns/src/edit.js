import { __ } from '@wordpress/i18n';
import { RawHTML } from '@wordpress/element';
import { useSelect } from '@wordpress/data';
import { useBlockProps } from '@wordpress/block-editor';
import './editor.scss';

export default function Edit({attributes, setAttributes}) {

	const posts = useSelect(
		(select) => {
			return select('core').getEntityRecords('postType', 'campaign', {
				per_page: 4, 
				_embed: true,
			});
	});

	return (
		<section {...useBlockProps()}>
			<div className="container">
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
							<div className="content">
								<h3>
									<a href={post.link}>
										{post.title.rendered}
									</a>
								</h3>
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
