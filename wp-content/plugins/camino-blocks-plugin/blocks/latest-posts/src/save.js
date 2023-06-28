import { __ } from '@wordpress/i18n';
import { useBlockProps, RichText } from '@wordpress/block-editor';

export default function save({attributes}) {

	const {title, content, link} = attributes;

	return (
		<section className="section-about">
			<div className="container">
				<img src="http://localhost:8888/camino/wp-content/themes/camino/images/we-are-camino.jpg" alt="" />
				<div className="card">
					<h6>We are Camino</h6>
					<h2>{title}</h2>
					<RichText.Content
						tagName="p"
						value={content}
					/>
					<a href={link} className={`primary button with-icon`}>Find Out More</a>
				</div>
			</div>
		</section>
	);
}