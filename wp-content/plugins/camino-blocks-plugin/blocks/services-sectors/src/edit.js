import { __ } from '@wordpress/i18n';
import { RawHTML } from '@wordpress/element';
import { format, dateI18n, __experimentalGetSettings } from '@wordpress/date';
import { useBlockProps, RichText } from '@wordpress/block-editor';
import { PanelBody, ToggleControl, QueryControls } from '@wordpress/components';
import { useSelect } from '@wordpress/data';
import './editor.scss';

export default function Edit({attributes, setAttributes}) {

	const { title, content } = attributes;

	const services = useSelect(
		(select) => { 
			return select('core').getEntityRecords('postType', 'services-sectors', {
				per_page: 20
			});
	});

	console.log(services);

	const sectors = useSelect(
		(select) => { 
			return select('core').getEntityRecords('postType', 'services-sectors', {
				per_page: 20
			});
	});

	return (
		<section { ...useBlockProps() }>
			<RichText
				tagName="h2"
				value={title}
				onChange={ (value) => setAttributes({ title: value }) }
				placeholder={ __('Title')}
			/>
			<RichText 
				value={content}
				onChange={ (value) => setAttributes({ content: value }) }
				placeholder={ __('Content')}
			/>
			<div className="columns">
				<div className="column">
					<h5>{ __('Services') }</h5>
					<ul>
						{services && services.map((service) => { 
							return (
								<li>{ service.title.rendered }</li>
							)
						})}
					</ul>
				</div>
				<div class="column">
					<h5>{ __('Sectors') }:</h5>
					<ul>
						<li>Retail/Consumer Products</li>
						<li>Healthcare</li>
						<li>Financial Services</li>
						<li>Real Estate and Construction</li>
						<li>Non-Profit Organizations</li>
					</ul>
				</div>
			</div>
    	</section>
	);
	
}
