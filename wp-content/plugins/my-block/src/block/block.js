/**
 * BLOCK: my-block-by-fx
 *
 * Registering a basic block with Gutenberg.
 * Simple block, renders and saves the same content without any interactivity.
 */

//  Import CSS.
import './editor.scss';
import './style.scss';

const { __ } = wp.i18n; // Import __() from wp.i18n
const { registerBlockType } = wp.blocks; // Import registerBlockType() from wp.blocks
const {InspectorControls} = wp.editor;
const {Panel, PanelBody, PanelRow, SelectControl, TextControl,ColorPicker } = wp.components;

/**
 * Register: aa Gutenberg Block.
 *
 * Registers a new block provided a unique name and an object defining its
 * behavior. Once registered, the block is made editor as an option to any
 * editor interface where blocks are implemented.
 *
 * @link https://wordpress.org/gutenberg/handbook/block-api/
 * @param  {string}   name     Block name.
 * @param  {Object}   settings Block settings.
 * @return {?WPBlock}          The block, if it has been successfully
 *                             registered; otherwise `undefined`.
 */
registerBlockType( 'mon-theme/block-fx', {
	// Block name. Block names must be string that contains a namespace prefix. Example: my-plugin/my-custom-block.
	title: __( 'Mon block' ), // Block title.
	description: __('block pour TP2'),
	icon: 'admin-users', // Block icon from Dashicons → https://developer.wordpress.org/resource/dashicons/.
	category: 'common', // Block category — Group blocks together based on common traits E.g. common, formatting, layout widgets, embed.
	keywords: [
		__( 'mon block' )
	],

	attributes:{
		title:{
			type: 'string',
			source: 'text',
			selector:'.titre-ph'
		},
		titleAlign:{
			type:'string',
			source:'text',
			selector:'.text-ph'
		},
		text:{
			type:'string',
			source:'text',
			selector:'.text-ph'
		},
		bgColor:{
			type:'string',
			source:'text',
			selector:'.style-ph'
		},
		textAlign:{
			type:'string',
			source:'text',
			selector:'.text-ph'
		},
		verticalWidth:{
			type:'string',
			source:'text',
			selector:'.style-ph'
		}
	},


	/**
	 * The edit function describes the structure of your block in the context of the editor.
	 * This represents what the editor will render when the block is used.
	 *
	 * The "edit" property must be a valid function.
	 *
	 * @link https://wordpress.org/gutenberg/handbook/block-api/block-edit-save/
	 *
	 * @param {Object} props Props.
	 * @returns {Mixed} JSX Component.
	 */
	edit: ( props ) => {
		return [
			<InspectorControls>
				<Panel header={"Block"}>
					<PanelBody title={"Texte"}>
						<PanelRow>
							<TextControl
								label={'Titre'}
								help ={'definir le titre du block qui sera afficher'}
								value={props.attributes.title}
								onChange={(val)=>{props.setAttributes({title:val})}}
							></TextControl>
						</PanelRow>
						<PanelRow>
							<SelectControl
								label={'alignement du titre'}
								options={[
									{label:'Gauche', value:'left'},
									{label:'Centrer', value:'center'},
									{label:'Droite',value:'right'}
								]}
								onChange={(e)=>{props.setAttributes({titleAlign:e})}}
							/>
						</PanelRow>
						<PanelRow>
							<TextControl
								label={'Texte du block'}
								help ={'definir le texte du block qui sera afficher'}
								value={props.attributes.text}
								onChange={(val)=>{props.setAttributes({text:val})}}
							>
							</TextControl>
						</PanelRow>
						<PanelRow>
							<SelectControl
								label={'alignement du text'}
								options={[
									{label:'Gauche', value:'left'},
									{label:'Centrer', value:'center'},
									{label:'Droite',value:'right'}
									]}
								onChange={(e)=>{props.setAttributes({textAlign:e})}}
							/>
						</PanelRow>
					</PanelBody>
					<PanelBody title={"Formattage Visuel"}>
						<PanelRow>
							<ColorPicker
								label={"Couleur d'arriere plan"}
								color={"#123568"}
								onChangeComplete={(val)=>props.setAttributes({bgColor:val.hex})}
							/>
						</PanelRow>
						<PanelRow>
							<TextControl
								label={'largeur du contenu'}
								help ={'definir la largeur du conteneur sur la page sur 100'}
								value={props.attributes.verticalWidth}
								onChange={(val)=>{props.setAttributes({verticalWidth: val})}}
							></TextControl>
						</PanelRow>
					</PanelBody>
				</Panel>
			</InspectorControls>,
			<div className={[props.className,"style-ph"]} style={{backgroundColor:props.attributes.bgColor, width:props.attributes.verticalWidth+'%',margin:'auto',padding:'0 5vw'}}>
					<h4 className="titre-ph" style={{textAlign:props.attributes.titleAlign}}>{props.attributes.title}</h4>
				<span className="text-ph" style={{textAlign:props.attributes.textAlign}}>
					<p>{props.attributes.text}</p>
				</span>
			</div>
			];
	},

	/**
	 * The save function defines the way in which the different attributes should be combined
	 * into the final markup, which is then serialized by Gutenberg into post_content.
	 *
	 * The "save" property must be specified and must be a valid function.
	 *
	 * @link https://wordpress.org/gutenberg/handbook/block-api/block-edit-save/
	 *
	 * @param {Object} props Props.
	 * @returns {Mixed} JSX Frontend HTML.
	 */
	save: ( props ) => {

		return (
			<div className="style-ph" style={{backgroundColor:props.attributes.bgColor, width:props.attributes.verticalWidth+'%',margin:'auto',padding:'0 5vw'}}>

					<h4 className="titre-ph" style={{textAlign:props.attributes.titleAlign}}>{props.attributes.title}</h4>

				<span className="text-ph" style={{textAlign:props.attributes.textAlign}}>
					<p>{props.attributes.text}</p>
				</span>
			</div>
		);
	},
} );
