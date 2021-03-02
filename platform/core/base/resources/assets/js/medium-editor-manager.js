export class MediumEditorManager {

    constructor(element) {
        this.element = element
    }

    init(){
        this.editor = new MediumEditor(this.element, {
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
                    }
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
            }
        });

    }
}
