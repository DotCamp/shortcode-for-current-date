import { useState, useEffect } from "@wordpress/element";
import { BlockControls } from "@wordpress/editor";
import { __ } from "@wordpress/i18n";
import { format } from "@wordpress/date";
import { TextControl } from "@wordpress/components";

const CurrentDateEdit = ({ attributes, setAttributes, isSelected }) => {
	const { content } = attributes;
	/* React Hooks */
	const [selected, setSelected] = useState(false);
	const [currentFormat, setCurrentFormat] = useState("jS F Y");

	useEffect(() => {
		if (!isSelected) {
			setSelected(false);
		}
	}, [isSelected]);

	/* Methods */
	const onSelect = () => {
		setSelected(!selected);
	};

	const onChangeCurrentFormat = newFormat => {
		setCurrentFormat(newFormat);
		setAttributes({ content: format(newFormat) });
	};

	/* Setting content */
	setAttributes({ content: format(currentFormat) });
	return (
		<>
			<span onClick={onSelect}>
				{content}
			</span>
			{selected && (
				<div>
					<TextControl
						label={__("Date format", "current-date")}
						value={currentFormat}
						onChange={onChangeCurrentFormat}
					/>
					<p>
						Check the{" "}
						<a
							href="https://www.php.net/manual/en/function.date.php"
							rel="noopener noreferrer"
							target="_blank"
						>
							PHP date formats
						</a>{" "}
						you can use.
					</p>
				</div>
			)}
		</>
	);
};

export default CurrentDateEdit;
