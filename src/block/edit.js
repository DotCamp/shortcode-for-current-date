import { useState, useEffect } from "@wordpress/element";
import { InspectorControls } from "@wordpress/editor";
import { __ } from "@wordpress/i18n";
import { format } from "@wordpress/date";
import { TextControl, PanelBody } from "@wordpress/components";

const CurrentDateEdit = ({ attributes, setAttributes, isSelected }) => {
	const { content } = attributes;
	/* React Hooks */
	const [selected, setSelected] = useState(false);
	const [currentFormat, setCurrentFormat] = useState("jS F Y");

	/* Methods */
	const onChangeCurrentFormat = newFormat => {
		setCurrentFormat(newFormat);
		setAttributes({ content: format(newFormat) });
	};

	/* Setting content */
	setAttributes({ content: format(currentFormat) });
	return (
		<>
			<InspectorControls>
				<PanelBody title={__('Format Settings', 'shortcode-for-current-date')}>
					<TextControl
						label={__("Date format", "shortcode-for-current-date")}
						value={currentFormat}
						onChange={onChangeCurrentFormat}
					/>
					<p>
						Check the{" "}
						<a
							href="https://www.php.net/manual/en/datetime.formats.date.php"
							rel="noopener noreferrer"
							target="_blank"
						>
							date formats
						</a>{" "}
						you can use.
					</p>
				</PanelBody>
			</InspectorControls>
			<span>{content}</span>
		</>
	);
};

export default CurrentDateEdit;
