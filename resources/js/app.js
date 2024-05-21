import EditorJS from '@editorjs/editorjs'
import Header from '@editorjs/header'

document.addEventListener('alpine:init', () => {
    Alpine.data('AkostEditorJs', (initialData = {}, initialTools = {}) => ({
        data: initialData,
        tools: initialTools,
        editor: null,

        init() {
            this.editor = new EditorJS({
                holderId : this.$el,
                data: this.data,
                // tools: this.tools,
                tools: {
                    header: Header
                },
            })
        },

        saveData() {
            this.editor.save()
                .then(outputData => {
                    this.data = JSON.stringify(outputData)
                })
                .catch(error => {
                    console.error('Saving failed: ', error)
                })
        },
    }))
})
