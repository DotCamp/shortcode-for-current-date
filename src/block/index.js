import { registerBlockType, createBlock } from "@wordpress/blocks";
import { __ } from "@wordpress/i18n";
import { format } from "@wordpress/date";
import edit from "./edit";

registerBlockType('shortcode-for-current-date/block', {
  title: __('Current Date', 'shortcode-for-current-date'),
  description: __('Displays current date', 'shortcode-for-current-date'),
  category: 'common',
  icon: 'calendar-alt',
  attributes: {
    content: {
      type: 'string',
      source: 'html',
      selector: 'span',
    }
  },
  transforms: {
    from: [{
        type: 'prefix',
        prefix: '[current_date]',
        transform: () => {
          return createBlock('shortcode-for-current-date/block')
        }
      }
    ],
    to: [
      {
        type: 'block',
        blocks: ['core/paragraph'],
        transform: ({content}) => {
          return createBlock('core/paragraph', {
            content: content
          })
        }
      }
    ]
  },
  edit,
  save: ({attributes}) => {
    const { content } = attributes;
    return <span>{content}</span>
  }

});
