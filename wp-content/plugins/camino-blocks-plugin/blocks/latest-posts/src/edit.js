import { __ } from '@wordpress/i18n';
import { RawHTML } from '@wordpress/element';
import { format, dateI18n, __experimentalGetSettings } from '@wordpress/date';
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, ToggleControl, QueryControls } from '@wordpress/components';
import { useSelect } from '@wordpress/data';
import './editor.scss';

export default function Edit({attributes, setAttributes}) {

	const {numberOfPosts, displayFeaturedImage, order, orderBy, categories} = attributes;
	const catIds = categories && categories.length > 0 ? categories.map(cat => cat.id) : [];
	const posts = useSelect(
		(select) => {
			return select('core').getEntityRecords('postType', 'post', {
				per_page: numberOfPosts, 
				_embed: true,
				order,
				orderby: orderBy,
				categories: catIds
			});
	}, [numberOfPosts, order, orderBy, categories]);

	const allCats = useSelect(
		(select) => {
		return select('core').getEntityRecords('taxonomy', 'category', {per_page: -1});
	}, []);

	const catSuggestions = {};
	if(allCats) {
		for (let i = 0; i < allCats.length; i++) {
			const cat = allCats[i];
			catSuggestions[cat.name] = cat;
		}
	};
	
	const onDisplayFeaturedImageChange = (value) => {
		setAttributes({displayFeaturedImage: value});
	};
	const onNumberOfItemsChange = (value) => {
		setAttributes({numberOfPosts: value});
	};

	const onCategoryChange = (values) => {
		const hasNoSuggestions = values.some((value) => typeof value == 'string' && !catSuggestions[value]);
		if(hasNoSuggestions) return;
		
		const updatedCats = values.map((token) => {
			return typeof token == 'string' ? catSuggestions[token] : token;
		});
		
		setAttributes({categories: updatedCats});
	};

	return (
		<>
		<InspectorControls>
			<PanelBody>
				<ToggleControl 
					label={ __('Display featured image', 'tenup') } 
					checked={displayFeaturedImage}
					onChange={onDisplayFeaturedImageChange}
				/>
				<QueryControls 
					numberOfItems={numberOfPosts}
					onNumberOfItemsChange={onNumberOfItemsChange}
					maxItems={12}
					minItems={2}
					orderBy={orderBy}
					onOrderByChange={(value) => setAttributes({orderBy: value})}
					order={order}
					onOrderChange={(value) => setAttributes({order: value})}
					categorySuggestions={catSuggestions}
					selectedCategories={categories}
					onCategoryChange={onCategoryChange}
				/>
			</PanelBody>
		</InspectorControls>
		<div {...useBlockProps()}>
			{posts && posts.map((post) => { 
				const featuredImage =
					post._embedded &&
					post._embedded['wp:featuredmedia'] &&
					post._embedded['wp:featuredmedia'].length > 0 &&
					post._embedded['wp:featuredmedia'][0];
				return (
					<div className="news-item" key={post.id}>
						{displayFeaturedImage && featuredImage && 
							<img 
							src={featuredImage.source_url} 
							alt={featuredImage.alt_text}
							/>
						}
						<h5>
							<a href={post.link}>
								{post.title.rendered ? (
								<RawHTML>{post.title.rendered}</RawHTML> 
								) : (
									__('No title', 'tenup')
								)}
							</a>
						</h5>
						{post.date_gmt && (
							<time 
								dateTime={format('c', post.date_gmt)}
							>
								{dateI18n(__experimentalGetSettings().formats.date, post.date_gmt)}
							</time>
						)}
						{post.excerpt.rendered &&
							<RawHTML>
								{post.excerpt.rendered}
							</RawHTML>
						}
					</div>
				)
			})}
		</div> 
		</>
	);
}
