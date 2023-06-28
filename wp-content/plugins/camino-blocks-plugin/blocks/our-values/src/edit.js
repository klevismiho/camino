import { __ } from '@wordpress/i18n';
import { useBlockProps, RichText } from '@wordpress/block-editor';
import './editor.scss';


export default function Edit({attributes, setAttributes}) {

	const {
		title, 
		content, 
		subtitle_1,
		subtitle_2,
		subtitle_3,
		subtitle_4,
		subtitle_5,
		subcontent_1,
		subcontent_2,
		subcontent_3,
		subcontent_4,
		subcontent_5
	} = attributes;

	return (
		<section { ...useBlockProps() }>
			<div className="columns">
				<div className="column">
					<RichText
						tagName="h2"
						value={title}
						onChange={ ( value ) => setAttributes({ title: value }) }
						placeholder={ __( 'Title here' )}
					/>
					<RichText 
						tagName="p"
						value={content}
						onChange={ ( value ) => setAttributes({ content: value }) }
						placeholder={ __( 'Content here' )}
					/>
				</div>
				<div className="column">
					<ul>
						<li>
							<div class="text">
								<RichText
									tagName="h5"
									value={subtitle_1}
									onChange={ ( value ) => setAttributes({ subtitle_1: value }) }
									placeholder={ __( 'Title here' )}
								/>
								<RichText 
									tagName="p"
									value={subcontent_1}
									onChange={ ( value ) => setAttributes({ subcontent_1: value }) }
									placeholder={ __( 'Content here' )}
								/>	
							</div>
						</li>
						<li>
							<div class="text">
								<RichText
									tagName="h5"
									value={subtitle_2}
									onChange={ ( value ) => setAttributes({ subtitle_2: value }) }
									placeholder={ __( 'Title here' )}
								/>
								<RichText 
									tagName="p"
									value={subcontent_2}
									onChange={ ( value ) => setAttributes({ subcontent_2: value }) }
									placeholder={ __( 'Content here' )}
								/>	
							</div>
						</li>
						<li>
							<div class="text">
								<RichText
									tagName="h5"
									value={subtitle_3}
									onChange={ ( value ) => setAttributes({ subtitle_3: value }) }
									placeholder={ __( 'Title here' )}
								/>
								<RichText 
									tagName="p"
									value={subcontent_3}
									onChange={ ( value ) => setAttributes({ subcontent_3: value }) }
									placeholder={ __( 'Content here' )}
								/>	
							</div>
						</li>
						<li>
							<div class="text">
								<RichText
									tagName="h5"
									value={subtitle_4}
									onChange={ ( value ) => setAttributes({ subtitle_4: value }) }
									placeholder={ __( 'Title here' )}
								/>
								<RichText 
									tagName="p"
									value={subcontent_4}
									onChange={ ( value ) => setAttributes({ subcontent_4: value }) }
									placeholder={ __( 'Content here' )}
								/>	
							</div>
						</li>
						<li>
							<div class="text">
								<RichText
									tagName="h5"
									value={subtitle_5}
									onChange={ ( value ) => setAttributes({ subtitle_5: value }) }
									placeholder={ __( 'Title here' )}
								/>
								<RichText 
									tagName="p"
									value={subcontent_5}
									onChange={ ( value ) => setAttributes({ subcontent_5: value }) }
									placeholder={ __( 'Content here' )}
								/>	
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>
	);
}