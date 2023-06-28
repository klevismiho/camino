import { __ } from '@wordpress/i18n';
import { __experimentalGetSettings } from '@wordpress/date';
import { useBlockProps, RichText, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, PanelRow, TextControl } from '@wordpress/components';
import { useSelect } from '@wordpress/data';
import './editor.scss';

export default function Edit({attributes, setAttributes}) {

	const { title, content, downloadLink } = attributes;

	const bibliography = useSelect(
		(select) => { 
			return select('core').getEntityRecords('postType', 'bibliography', {
				per_page: 20
			});
	});

	return (
		<>
		<InspectorControls>
			<PanelBody 
				title={ __( 'Link Settings', 'camino-blocks-plugin' )}
				initialOpen={true}
			>
				<PanelRow>
					<fieldset>
						<TextControl
							label={__( 'Download Link' )}
							value={ downloadLink }
							onChange={ (value) => setAttributes({downloadLink: value}) }
						/>
					</fieldset>
				</PanelRow>
			</PanelBody>
		</InspectorControls>
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
			<ul>
				{bibliography && bibliography.map((post) => { 
					return (
						<li>{ post.title.rendered }</li>
					)
				})}
			</ul>
    	</section>
		</>
	);
	
}
