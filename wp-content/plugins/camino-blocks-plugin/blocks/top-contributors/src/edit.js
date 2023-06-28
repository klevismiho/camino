import { __ } from '@wordpress/i18n';
import { RawHTML } from '@wordpress/element';
import { format, dateI18n, __experimentalGetSettings } from '@wordpress/date';
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, ToggleControl, QueryControls } from '@wordpress/components';
import { useSelect } from '@wordpress/data';
import './editor.scss';

export default function Edit({attributes, setAttributes}) {

	const {numberOfPosts, displayFeaturedImage, order, orderBy, categories} = attributes;

	const posts = useSelect(
		(select) => {
			return select('core').getEntityRecords('postType', 'contributor', {
				per_page: 2, 
				_embed: true,
			});
	});

	return (
		<>
		<div {...useBlockProps()}>
			{posts && posts.map((post) => { 

				const featuredImage =
					post._embedded &&
					post._embedded['wp:featuredmedia'] &&
					post._embedded['wp:featuredmedia'].length > 0 &&
					post._embedded['wp:featuredmedia'][0];
				return (
					<div className="item" key={post.id}>
						{displayFeaturedImage && featuredImage && 
							<img 
							src={featuredImage.source_url} 
							alt={featuredImage.alt_text}
							/>
						}
						<div class="content">
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
		</>
	);
}
