import { __ } from '@wordpress/i18n';
import { useBlockProps, RichText } from '@wordpress/block-editor';
import { useSelect } from '@wordpress/data';
import './editor.scss';

export default function Edit({attributes, setAttributes}) {

	const {title} = attributes;

	const onChangeTitle = (value) => {
		setAttributes({title: value});
	};

	const posts = useSelect(
		(select) => {
			return select('core').getEntityRecords('postType', 'what-we-do', {
				per_page: 20, 
				_embed: true
			});
	});

	return (
		<div {...useBlockProps()}>
			<RichText
				tagName="h2"
				onChange={onChangeTitle}
				value={title}
			/>
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
						</div>
					)
				})}
			</div>
		</div> 
	);
}
