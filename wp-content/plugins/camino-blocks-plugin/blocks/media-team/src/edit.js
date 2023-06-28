import { __ } from '@wordpress/i18n';
import { RawHTML } from '@wordpress/element';
import { format, dateI18n, __experimentalGetSettings } from '@wordpress/date';
import { useBlockProps, RichText } from '@wordpress/block-editor';
import { PanelBody, ToggleControl, QueryControls } from '@wordpress/components';
import { useSelect } from '@wordpress/data';
import './editor.scss';

export default function Edit() {

	const posts = useSelect(
		(select) => { 
			return select('core').getEntityRecords('postType', 'media-team', {
				per_page: 20,
				_embed: true
			});
	});

	return (
		<section  {...useBlockProps()}>
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
						<div class="item-content">
							<div>
								<h4><RawHTML>{post.title.rendered}</RawHTML> </h4>
							</div>
						</div>
					</div>
				)
			})}
		</section>
	);
}
