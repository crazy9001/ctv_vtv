import React, {useState} from 'react';
import ReactDOM from 'react-dom';

const _mediumEditor = require("medium-editor");
require('medium-editor/dist/css/medium-editor.css');

import { TCMention } from "medium-editor-tc-mention";
require("medium-editor-tc-mention/lib/mention-panel.min.css");

export function CustomizedTagComponent (props) {
    const trigger = props.currentMentionText.substring(0, 1);
    const [mentions, setMentions] = useState(["Demon Warlock", "Giao Linh"]);
    return (
        <div>
            <span onClick={() => props.selectMentionCallback(null)}>
                Cancel
            </span>
            {
                mentions.map((mention, index) =>  (
                    <span key={index} onClick={() => props.selectMentionCallback(trigger + `${mention}`)}>
                        { trigger + `${mention}` }
                    </span>
                ))
            }
        </div>
    );
}

export class MediumEditorManager {

    constructor(element) {
        this.element = element
    }

    init() {
        this.editor = new _mediumEditor(this.element, {
            buttonLabels: 'fontawesome',
            placeholder: {
                text: 'Nhập nội dung',
                hideOnClick: true
            },
            toolbar: {
                allowMultiParagraphSelection: true,
                buttons: [
                    'bold', 'italic', 'underline',
                    {
                        name: 'anchor',
                        contentDefault: '<i class="fa fa-link"></i>',
                    },
                    {
                        name: 'justifyFull',
                        contentDefault: '<i class="fa fa-align-justify"></i>',
                    },
                    {
                        name: 'justifyLeft',
                        contentDefault: '<i class="fa fa-align-left"></i>',
                    },
                    {
                        name: 'justifyCenter',
                        contentDefault: '<i class="fa fa-align-center"></i>',
                    },
                    {
                        name: 'justifyRight',
                        contentDefault: '<i class="fa fa-align-right"></i>',
                    },
                    {
                        name: 'table',
                        contentDefault: '<i class="fa fa-table"></i>',
                    },
                ],
                diffLeft: 0,
                diffTop: -10,
                firstButtonClass: 'medium-editor-button-first',
                lastButtonClass: 'medium-editor-button-last',
                relativeContainer: null,
                standardizeSelectionStart: false,
                static: false,
                /* options which only apply when static is true */
                align: 'center',
                sticky: false,
                updateOnEmptySelection: false
            },
            extensions: {
                "mention": new TCMention({
                    tagName: "b",
                    renderPanelContent: function (panelEl, currentMentionText, selectMentionCallback) {
                        ReactDOM.render((
                            <CustomizedTagComponent
                                currentMentionText={currentMentionText}
                                selectMentionCallback={selectMentionCallback}
                            />
                        ), panelEl);
                    },
                    activeTriggerList: ["#", "@"]
                })
            },
        });
        //
        // const elm = document.getElementById(this.element[0].id);
        //
        // this.editor.subscribe('editableInput', (e) => {
        //     const innerHTML = elm.innerHTML
        //     console.log(innerHTML)
        // });

    }
}
