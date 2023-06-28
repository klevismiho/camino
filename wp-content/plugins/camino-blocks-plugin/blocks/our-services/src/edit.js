import { __ } from '@wordpress/i18n';
import { RawHTML } from '@wordpress/element';
import { format, dateI18n, __experimentalGetSettings } from '@wordpress/date';
import { useBlockProps, RichText } from '@wordpress/block-editor';
import { PanelBody, ToggleControl, QueryControls } from '@wordpress/components';
import { useSelect } from '@wordpress/data';
import './editor.scss';

export default function Edit({attributes, setAttributes}) {

	const {title, content, displayFeaturedImage} = attributes;

	const posts = useSelect(
		(select) => { 
			return select('core').getEntityRecords('postType', 'service', {
				per_page: 20,
				_embed: true
			});
	});

	return (
		<section  {...useBlockProps()}>
			<div class="container">
				<div class="services-header">
					<RichText
						tagName="h2"
						value={title}
						onChange={ (value) => setAttributes({ title: value }) }
						placeholder={ __('Title', 'camino-blocks-plugin') }
					/>
					<RichText
						tagName="p"
						value={content}
						onChange={ (value) => setAttributes({ content: value }) }
						placeholder={ __('Content here', 'camino-blocks-plugin') }
					/>	
				</div>

				<div class="services-grid">
					{posts && posts.map((post) => { 
						const featuredImage =
							post._embedded &&
							post._embedded['wp:featuredmedia'] &&
							post._embedded['wp:featuredmedia'].length > 0 &&
							post._embedded['wp:featuredmedia'][0];
						return (
							<div className="service-item" key={post.id}>
								{featuredImage && 
									<img 
									src={featuredImage.source_url} 
									alt={featuredImage.alt_text}
									/>
								}
								<h3>
									{post.title.rendered ? (
									<RawHTML>{post.title.rendered}</RawHTML> 
									) : (
										__('No title', 'tenup')
									)}
								</h3>
								<div className="item-content">
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
			</div>
		</section>
	);
}
