<html lang="en">
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="images/ico1.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias - GP CANAL</title>
    <meta name="description" content="Sitio web profesional sobre noticias políticas, encuestas y candidatos.">
    <link rel="stylesheet" href="{{ asset('css/stylenoticias.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
      /* ! tailwindcss v3.3.5 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:var(--ai-create-color-theme-200)}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(147 197 253 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(147 197 253 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.pointer-events-none{pointer-events:none}.fixed{position:fixed}.absolute{position:absolute}.relative{position:relative}.inset-0{inset:0px}.inset-y-0{top:0px;bottom:0px}.left-1\/2{left:50%}.left-6{left:1.5rem}.left-8{left:2rem}.right-6{right:1.5rem}.top-14{top:3.5rem}.top-6{top:1.5rem}.top-\[-130px\]{top:-130px}.-top-12{top:-3rem}.bottom-0{bottom:0px}.left-0{left:0px}.right-1\/2{right:50%}.top-0{top:0px}.isolate{isolation:isolate}.z-10{z-index:10}.z-20{z-index:20}.z-40{z-index:40}.-z-10{z-index:-10}.order-first{order:-9999}.col-span-2{grid-column:span 2 / span 2}.col-end-1{grid-column-end:1}.m-auto{margin:auto}.mx-auto{margin-left:auto;margin-right:auto}.-ml-0{margin-left:-0px}.-ml-0\.5{margin-left:-0.125rem}.ml-6{margin-left:1.5rem}.ml-8{margin-left:2rem}.mt-0{margin-top:0px}.mt-0\.5{margin-top:0.125rem}.mt-10{margin-top:2.5rem}.mt-12{margin-top:3rem}.mt-16{margin-top:4rem}.mt-2{margin-top:0.5rem}.mt-3{margin-top:0.75rem}.mt-4{margin-top:1rem}.mt-5{margin-top:1.25rem}.mt-6{margin-top:1.5rem}.mt-8{margin-top:2rem}.mb-6{margin-bottom:1.5rem}.mr-12{margin-right:3rem}.mt-1{margin-top:0.25rem}.line-clamp-3{overflow:hidden;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:3}.inline-block{display:inline-block}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.contents{display:contents}.hidden{display:none}.aspect-\[4\/3\]{aspect-ratio:4/3}.aspect-video{aspect-ratio:16 / 9}.aspect-\[16\/10\]{aspect-ratio:16/10}.aspect-\[7\/5\]{aspect-ratio:7/5}.aspect-square{aspect-ratio:1 / 1}.h-1\/2{height:50%}.h-10{height:2.5rem}.h-12{height:3rem}.h-16{height:4rem}.h-7{height:1.75rem}.h-\[14rem\]{height:14rem}.h-\[18rem\]{height:18rem}.h-full{height:100%}.h-32{height:8rem}.h-\[50rem\]{height:50rem}.h-auto{height:auto}.\!w-auto{width:auto !important}.w-1\/4{width:25%}.w-10{width:2.5rem}.w-16{width:4rem}.w-\[1px\]{width:1px}.w-auto{width:auto}.w-fit{width:-moz-fit-content;width:fit-content}.w-full{width:100%}.w-px{width:1px}.w-0{width:0px}.w-64{width:16rem}.w-96{width:24rem}.w-\[150vw\]{width:150vw}.w-\[24rem\]{width:24rem}.w-\[37rem\]{width:37rem}.w-\[90rem\]{width:90rem}.min-w-0{min-width:0px}.\!max-w-\[300px\]{max-width:300px !important}.max-w-2xl{max-width:42rem}.max-w-3xl{max-width:48rem}.max-w-4xl{max-width:56rem}.max-w-7xl{max-width:80rem}.max-w-\[1376px\]{max-width:1376px}.max-w-\[180px\]{max-width:180px}.max-w-lg{max-width:32rem}.max-w-md{max-width:28rem}.max-w-xl{max-width:36rem}.max-w-none{max-width:none}.flex-1{flex:1 1 0%}.flex-auto{flex:1 1 auto}.flex-none{flex:none}.flex-shrink{flex-shrink:1}.flex-shrink-0{flex-shrink:0}.flex-grow{flex-grow:1}.origin-bottom-left{transform-origin:bottom left}.-translate-x-1\/2{--tw-translate-x:-50%;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.skew-x-\[-30deg\]{--tw-skew-x:-30deg;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.transform{transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.cursor-pointer{cursor:pointer}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.flex-wrap{flex-wrap:wrap}.items-start{align-items:flex-start}.items-center{align-items:center}.justify-start{justify-content:flex-start}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.gap-1{gap:0.25rem}.gap-10{gap:2.5rem}.gap-12{gap:3rem}.gap-16{gap:4rem}.gap-2{gap:0.5rem}.gap-24{gap:6rem}.gap-3{gap:0.75rem}.gap-6{gap:1.5rem}.gap-1\.5{gap:0.375rem}.gap-4{gap:1rem}.gap-5{gap:1.25rem}.gap-8{gap:2rem}.gap-x-4{column-gap:1rem}.gap-x-6{column-gap:1.5rem}.gap-x-8{column-gap:2rem}.gap-y-12{row-gap:3rem}.gap-y-16{row-gap:4rem}.gap-y-20{row-gap:5rem}.gap-x-12{column-gap:3rem}.gap-y-8{row-gap:2rem}.space-x-4 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(1rem * var(--tw-space-x-reverse));margin-left:calc(1rem * calc(1 - var(--tw-space-x-reverse)))}.space-y-12 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(3rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(3rem * var(--tw-space-y-reverse))}.space-y-6 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(1.5rem * var(--tw-space-y-reverse))}.space-x-8 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(2rem * var(--tw-space-x-reverse));margin-left:calc(2rem * calc(1 - var(--tw-space-x-reverse)))}.space-y-16 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(4rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(4rem * var(--tw-space-y-reverse))}.divide-y > :not([hidden]) ~ :not([hidden]){--tw-divide-y-reverse:0;border-top-width:calc(1px * calc(1 - var(--tw-divide-y-reverse)));border-bottom-width:calc(1px * var(--tw-divide-y-reverse))}.divide-black\/10 > :not([hidden]) ~ :not([hidden]){border-color:rgb(0 0 0 / 0.1)}.self-end{align-self:flex-end}.overflow-hidden{overflow:hidden}.text-ellipsis{text-overflow:ellipsis}.whitespace-nowrap{white-space:nowrap}.rounded-2xl{border-radius:1rem}.rounded-3xl{border-radius:1.5rem}.rounded-full{border-radius:9999px}.rounded-md{border-radius:0.375rem}.rounded{border-radius:0.25rem}.rounded-lg{border-radius:0.5rem}.rounded-xl{border-radius:0.75rem}.border{border-width:1px}.border-0{border-width:0px}.border-l-4{border-left-width:4px}.border-t{border-top-width:1px}.border-dotted{border-style:dotted}.border-black\/10{border-color:rgb(0 0 0 / 0.1)}.border-transparent{border-color:transparent}.border-sky-200{border-color:var(--ai-create-color-theme-200)}.bg-\[\#ffffffe0\]{background-color:#ffffffe0}.bg-black\/10{background-color:rgb(0 0 0 / 0.1)}.bg-blue-500{background-color:var(--ai-create-color-theme-500)}.bg-sky-500{background-color:var(--ai-create-color-theme-500)}.bg-slate-100{background-color:var(--ai-create-color-theme-100)}.bg-slate-50{background-color:var(--ai-create-color-theme-50)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-yellow-400{background-color:var(--ai-create-color-theme-400)}.bg-zinc-200{background-color:var(--ai-create-color-theme-200)}.bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.bg-gray-900{background-color:var(--ai-create-color-theme-900)}.bg-sky-50{background-color:var(--ai-create-color-theme-50)}.bg-white\/20{background-color:rgb(255 255 255 / 0.2)}.bg-opacity-50{--tw-bg-opacity:0.5}.bg-\[radial-gradient\(50\%_100\%_at_top\2c theme\(colors\.sky\.100\)\2c transparent\)\]{background-image:radial-gradient(50% 100% at top,var(--ai-create-color-theme-100),transparent)}.bg-gradient-to-t{background-image:linear-gradient(to top, var(--tw-gradient-stops))}.from-black{--tw-gradient-from:#000 var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.bg-top{background-position:top}.bg-origin-content{background-origin:content-box}.stroke-yellow-500{stroke:var(--ai-create-color-theme-500)}.object-contain{object-fit:contain}.object-cover{object-fit:cover}.object-left{object-position:left}.object-top{object-position:top}.object-right{object-position:right}.p-6{padding:1.5rem}.p-1{padding:0.25rem}.p-1\.5{padding:0.375rem}.p-4{padding:1rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.px-3\.5{padding-left:0.875rem;padding-right:0.875rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-1{padding-top:0.25rem;padding-bottom:0.25rem}.py-1\.5{padding-top:0.375rem;padding-bottom:0.375rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.py-2\.5{padding-top:0.625rem;padding-bottom:0.625rem}.py-24{padding-top:6rem;padding-bottom:6rem}.py-3{padding-top:0.75rem;padding-bottom:0.75rem}.px-5{padding-left:1.25rem;padding-right:1.25rem}.py-20{padding-top:5rem;padding-bottom:5rem}.pt-6{padding-top:1.5rem}.text-left{text-align:left}.text-center{text-align:center}.text-2xl{font-size:1.5rem;line-height:2rem}.text-3xl{font-size:1.875rem;line-height:2.25rem}.text-4xl{font-size:2.25rem;line-height:2.5rem}.text-5xl{font-size:3rem;line-height:1}.text-base{font-size:1rem;line-height:1.5rem}.text-lg{font-size:1.125rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-xs{font-size:0.75rem;line-height:1rem}.font-bold{font-weight:700}.font-extrabold{font-weight:800}.font-medium{font-weight:500}.font-normal{font-weight:400}.font-semibold{font-weight:600}.leading-6{line-height:1.5rem}.leading-8{line-height:2rem}.leading-7{line-height:1.75rem}.leading-9{line-height:2.25rem}.tracking-tight{letter-spacing:-0.025em}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-black\/60{color:rgb(0 0 0 / 0.6)}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-sky-500{color:var(--ai-create-color-theme-500)}.text-slate-500{--tw-text-opacity:1;color:rgb(100 116 139 / var(--tw-text-opacity))}.text-slate-600{--tw-text-opacity:1;color:rgb(71 85 105 / var(--tw-text-opacity))}.text-slate-700{--tw-text-opacity:1;color:rgb(51 65 85 / var(--tw-text-opacity))}.text-slate-800{--tw-text-opacity:1;color:rgb(30 41 59 / var(--tw-text-opacity))}.text-slate-900{--tw-text-opacity:1;color:rgb(15 23 42 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity:1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-sky-600{color:var(--ai-create-color-theme-600)}.text-white\/80{color:rgb(255 255 255 / 0.8)}.opacity-0{opacity:0}.opacity-20{opacity:0.2}.shadow-sm{--tw-shadow:0 1px 2px 0 rgb(0 0 0 / 0.05);--tw-shadow-colored:0 1px 2px 0 var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-lg{--tw-shadow:0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-xl{--tw-shadow:0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.outline{outline-style:solid}.outline-slate-900{outline-color:var(--ai-create-color-theme-900)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-inset{--tw-ring-inset:inset}.ring-black\/10{--tw-ring-color:rgb(0 0 0 / 0.1)}.ring-sky-50{--tw-ring-color:var(--ai-create-color-theme-50)}.backdrop-blur-sm{--tw-backdrop-blur:blur(4px);-webkit-backdrop-filter:var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);backdrop-filter:var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.transition-colors{transition-property:color, background-color, border-color, fill, stroke, -webkit-text-decoration-color;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, -webkit-text-decoration-color;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.transition-opacity{transition-property:opacity;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.transition-transform{transition-property:transform;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-200{transition-duration:200ms}.duration-300{transition-duration:300ms}.duration-500{transition-duration:500ms}.ease-in-out{transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1)}.hover\:scale-105:hover{--tw-scale-x:1.05;--tw-scale-y:1.05;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.hover\:scale-110:hover{--tw-scale-x:1.1;--tw-scale-y:1.1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.hover\:bg-blue-600:hover{background-color:var(--ai-create-color-theme-600)}.hover\:bg-sky-400:hover{background-color:var(--ai-create-color-theme-400)}.hover\:bg-slate-900:hover{background-color:var(--ai-create-color-theme-900)}.hover\:bg-yellow-500:hover{background-color:var(--ai-create-color-theme-500)}.hover\:bg-slate-100:hover{background-color:var(--ai-create-color-theme-100)}.hover\:bg-slate-200:hover{background-color:var(--ai-create-color-theme-200)}.hover\:bg-white\/80:hover{background-color:rgb(255 255 255 / 0.8)}.hover\:text-sky-400:hover{color:var(--ai-create-color-theme-400)}.hover\:text-slate-50:hover{--tw-text-opacity:1;color:rgb(248 250 252 / var(--tw-text-opacity))}.hover\:transition-all:hover{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.hover\:duration-300:hover{transition-duration:300ms}.focus\:bg-slate-500:focus{background-color:var(--ai-create-color-theme-500)}.focus\:text-sky-500:focus{color:var(--ai-create-color-theme-500)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring-2:focus{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus\:ring-gray-200:focus{--tw-ring-color:var(--ai-create-color-theme-200)}.focus\:ring-offset-2:focus{--tw-ring-offset-width:2px}.focus-visible\:outline:focus-visible{outline-style:solid}.focus-visible\:outline-2:focus-visible{outline-width:2px}.focus-visible\:outline-offset-2:focus-visible{outline-offset:2px}.focus-visible\:outline-sky-600:focus-visible{outline-color:var(--ai-create-color-theme-600)}.group\/nav:hover .group-hover\/nav\:translate-x-1{--tw-translate-x:0.25rem;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.group:hover .group-hover\:translate-x-1{--tw-translate-x:0.25rem;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.group:hover .group-hover\:scale-110{--tw-scale-x:1.1;--tw-scale-y:1.1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.group:hover .group-hover\:text-slate-600{--tw-text-opacity:1;color:rgb(71 85 105 / var(--tw-text-opacity))}.group:hover .group-hover\:opacity-100{opacity:1}:is(.dark .dark\:divide-white\/10) > :not([hidden]) ~ :not([hidden]){border-color:rgb(255 255 255 / 0.1)}:is(.dark .dark\:border-white\/10){border-color:rgb(255 255 255 / 0.1)}:is(.dark .dark\:border-slate-800){border-color:var(--ai-create-color-theme-800)}:is(.dark .dark\:bg-slate-700){background-color:var(--ai-create-color-theme-700)}:is(.dark .dark\:bg-slate-800){background-color:var(--ai-create-color-theme-800)}:is(.dark .dark\:bg-white\/10){background-color:rgb(255 255 255 / 0.1)}:is(.dark .dark\:bg-zinc-700){background-color:var(--ai-create-color-theme-700)}:is(.dark .dark\:bg-zinc-900){background-color:var(--ai-create-color-theme-900)}:is(.dark .dark\:bg-slate-600){background-color:var(--ai-create-color-theme-600)}:is(.dark .dark\:bg-slate-900){background-color:var(--ai-create-color-theme-900)}:is(.dark .dark\:bg-white){--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}:is(.dark .dark\:text-slate-200){--tw-text-opacity:1;color:rgb(226 232 240 / var(--tw-text-opacity))}:is(.dark .dark\:text-slate-300){--tw-text-opacity:1;color:rgb(203 213 225 / var(--tw-text-opacity))}:is(.dark .dark\:text-slate-400){--tw-text-opacity:1;color:rgb(148 163 184 / var(--tw-text-opacity))}:is(.dark .dark\:text-slate-50){--tw-text-opacity:1;color:rgb(248 250 252 / var(--tw-text-opacity))}:is(.dark .dark\:text-white){--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}:is(.dark .dark\:text-white\/70){color:rgb(255 255 255 / 0.7)}:is(.dark .dark\:text-white\/80){color:rgb(255 255 255 / 0.8)}:is(.dark .dark\:text-white\/90){color:rgb(255 255 255 / 0.9)}:is(.dark .dark\:text-sky-400){color:var(--ai-create-color-theme-400)}:is(.dark .dark\:text-white\/60){color:rgb(255 255 255 / 0.6)}:is(.dark .dark\:outline-slate-50){outline-color:var(--ai-create-color-theme-50)}:is(.dark .dark\:ring-white\/10){--tw-ring-color:rgb(255 255 255 / 0.1)}:is(.dark .dark\:ring-slate-700){--tw-ring-color:var(--ai-create-color-theme-700)}:is(.dark .dark\:hover\:bg-sky-400:hover){background-color:var(--ai-create-color-theme-400)}:is(.dark .dark\:hover\:bg-slate-600:hover){background-color:var(--ai-create-color-theme-600)}:is(.dark .hover\:dark\:bg-slate-50):hover{background-color:var(--ai-create-color-theme-50)}:is(.dark .dark\:hover\:bg-slate-700:hover){background-color:var(--ai-create-color-theme-700)}:is(.dark .dark\:hover\:text-sky-400:hover){color:var(--ai-create-color-theme-400)}:is(.dark .dark\:hover\:text-white\/60:hover){color:rgb(255 255 255 / 0.6)}:is(.dark .hover\:dark\:text-slate-900):hover{--tw-text-opacity:1;color:rgb(15 23 42 / var(--tw-text-opacity))}:is(.dark .dark\:hover\:text-white:hover){--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}:is(.dark .hover\:dark\:outline-slate-50):hover{outline-color:var(--ai-create-color-theme-50)}:is(.dark .dark\:focus\:bg-sky-500:focus){background-color:var(--ai-create-color-theme-500)}:is(.dark .dark\:focus\:text-sky-500:focus){color:var(--ai-create-color-theme-500)}:is(.dark .group:hover .dark\:group-hover\:text-white\/80){color:rgb(255 255 255 / 0.8)}@media (min-width: 640px){.sm\:mr-20{margin-right:5rem}.sm\:mt-20{margin-top:5rem}.sm\:block{display:block}.sm\:w-0{width:0px}.sm\:flex-auto{flex:1 1 auto}.sm\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.sm\:gap-8{gap:2rem}.sm\:gap-y-14{row-gap:3.5rem}.sm\:space-x-8 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(2rem * var(--tw-space-x-reverse));margin-left:calc(2rem * calc(1 - var(--tw-space-x-reverse)))}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:py-16{padding-top:4rem;padding-bottom:4rem}.sm\:py-20{padding-top:5rem;padding-bottom:5rem}.sm\:py-32{padding-top:8rem;padding-bottom:8rem}.sm\:text-4xl{font-size:2.25rem;line-height:2.5rem}.sm\:text-2xl{font-size:1.5rem;line-height:2rem}.sm\:text-6xl{font-size:3.75rem;line-height:1}.sm\:text-base{font-size:1rem;line-height:1.5rem}.sm\:leading-9{line-height:2.25rem}}@media (min-width: 768px){.md\:mt-0{margin-top:0px}.md\:mr-0{margin-right:0px}.md\:flex{display:flex}.md\:aspect-\[1\/1\]{aspect-ratio:1/1}.md\:h-12{height:3rem}.md\:h-14{height:3.5rem}.md\:h-\[16rem\]{height:16rem}.md\:h-\[24rem\]{height:24rem}.md\:w-4\/5{width:80%}.md\:w-5\/6{width:83.333333%}.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.md\:grid-cols-5{grid-template-columns:repeat(5, minmax(0, 1fr))}.md\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.md\:grid-cols-\[0\.8fr_1fr\]{grid-template-columns:0.8fr 1fr}.md\:items-center{align-items:center}.md\:justify-between{justify-content:space-between}.md\:space-x-16 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(4rem * var(--tw-space-x-reverse));margin-left:calc(4rem * calc(1 - var(--tw-space-x-reverse)))}.md\:rounded-full{border-radius:9999px}.md\:border-black\/10{border-color:rgb(0 0 0 / 0.1)}.md\:object-center{object-position:center}.md\:px-8{padding-left:2rem;padding-right:2rem}.md\:py-32{padding-top:8rem;padding-bottom:8rem}.md\:text-4xl{font-size:2.25rem;line-height:2.5rem}.md\:text-6xl{font-size:3.75rem;line-height:1}.md\:text-base{font-size:1rem;line-height:1.5rem}.md\:transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}}@media (min-width: 1024px){.lg\:left-36{left:9rem}.lg\:right-full{right:100%}.lg\:col-span-2{grid-column:span 2 / span 2}.lg\:col-start-1{grid-column-start:1}.lg\:col-end-1{grid-column-end:1}.lg\:col-end-2{grid-column-end:2}.lg\:row-span-4{grid-row:span 4 / span 4}.lg\:row-start-2{grid-row-start:2}.lg\:row-start-3{grid-row-start:3}.lg\:mx-0{margin-left:0px;margin-right:0px}.lg\:-mr-36{margin-right:-9rem}.lg\:ml-auto{margin-left:auto}.lg\:mt-16{margin-top:4rem}.lg\:flex{display:flex}.lg\:contents{display:contents}.lg\:w-72{width:18rem}.lg\:w-\[37rem\]{width:37rem}.lg\:w-auto{width:auto}.lg\:w-full{width:100%}.lg\:min-w-full{min-width:100%}.lg\:max-w-none{max-width:none}.lg\:max-w-4xl{max-width:56rem}.lg\:max-w-lg{max-width:32rem}.lg\:flex-none{flex:none}.lg\:origin-center{transform-origin:center}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-4{grid-template-columns:repeat(4, minmax(0, 1fr))}.lg\:grid-cols-\[0\.4fr_1fr\]{grid-template-columns:0.4fr 1fr}.lg\:flex-row{flex-direction:row}.lg\:items-start{align-items:flex-start}.lg\:justify-end{justify-content:flex-end}.lg\:gap-x-10{column-gap:2.5rem}.lg\:gap-x-8{column-gap:2rem}.lg\:gap-y-8{row-gap:2rem}.lg\:space-x-16 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(4rem * var(--tw-space-x-reverse));margin-left:calc(4rem * calc(1 - var(--tw-space-x-reverse)))}.lg\:space-y-20 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(5rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(5rem * var(--tw-space-y-reverse))}.lg\:self-end{align-self:flex-end}.lg\:rounded-3xl{border-radius:1.5rem}.lg\:px-8{padding-left:2rem;padding-right:2rem}.lg\:py-20{padding-top:5rem;padding-bottom:5rem}.lg\:px-10{padding-left:2.5rem;padding-right:2.5rem}.lg\:py-8{padding-top:2rem;padding-bottom:2rem}.lg\:pl-8{padding-left:2rem}.lg\:pb-8{padding-bottom:2rem}.lg\:text-xl{font-size:1.25rem;line-height:1.75rem}}@media (min-width: 1280px){.xl\:max-w-2xl{max-width:42rem}.xl\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.xl\:gap-12{gap:3rem}.xl\:py-3{padding-top:0.75rem;padding-bottom:0.75rem}.xl\:text-5xl{font-size:3rem;line-height:1}.xl\:text-6xl{font-size:3.75rem;line-height:1}}@media (min-width: 1536px){.\32xl\:text-lg{font-size:1.125rem;line-height:1.75rem}}
    </style>
</head>

  <body>
    <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
      <img src="images/image1.jpg" class="_image_bh1ht_4 IMAGE absolute inset-0 opacity-20 -z-10 h-full w-full object-cover object-right md:object-center rounded-lg bg-slate-100" alt="" style="background-color: transparent;">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
          <h2 class="TITLE-PRIMARY text-4xl font-bold tracking-tight text-white sm:text-6xl">
            <div class="_editable_jwu41_1 undefined">Explora las Noticias Más Relevantes</div>
          </h2>
          <p class="DESC mt-6 text-lg leading-8 text-gray-300">
            Mantente informado con los últimos acontecimientos políticos, análisis detallados y perspectivas clave en un solo lugar
          </p>
        </div>
        <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
          <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
            <div class="flex flex-col-reverse">
              <dt class="TEXT-CONTENT text-base leading-7 text-gray-300">
                <div class="_editable_jwu41_1 undefined">Artículos Publicados</div>
              </dt>
              <dd class="text-2xl font-bold leading-9 tracking-tight text-white">
                <div class="_editable_jwu41_1 undefined">500+</div>
              </dd>
            </div>
            <div class="flex flex-col-reverse">
              <dt class="TEXT-CONTENT text-base leading-7 text-gray-300">
                <div class="_editable_jwu41_1 undefined">Categorías de Noticias</div>
              </dt>
              <dd class="text-2xl font-bold leading-9 tracking-tight text-white">
                <div class="_editable_jwu41_1 undefined">20+</div>
              </dd>
            </div>
            <div class="flex flex-col-reverse">
              <dt class="TEXT-CONTENT text-base leading-7 text-gray-300">
                <div class="_editable_jwu41_1 undefined">Expertos Colaboradores</div>
              </dt>
              <dd class="text-2xl font-bold leading-9 tracking-tight text-white">
                <div class="_editable_jwu41_1 undefined">50+</div>
              </dd>
            </div>
            <div class="flex flex-col-reverse">
              <dt class="TEXT-CONTENT text-base leading-7 text-gray-300">
                <div class="_editable_jwu41_1 undefined">Actualizaciones Diarias</div>
              </dt>
              <dd class="text-2xl font-bold leading-9 tracking-tight text-white">
                <div class="_editable_jwu41_1 undefined">24/7</div>
              </dd>
            </div>
          </dl>
        </div>
      </div>
    </div>
    <div class="bg-white py-16 sm:py-20 dark:bg-slate-800">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:max-w-4xl">
          <h2 class="TITLE-PRIMARY text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white/90">
            <div class="_editable_jwu41_1 undefined">Últimos Artículos</div>
          </h2>
          <p class="DESC mt-2 text-lg leading-8 text-slate-700 dark:text-white/80">
            <div class="_editable_jwu41_1 undefined">Explora análisis detallados y perspectivas clave de expertos en política y comunicación.</div>
          </p>
          <div class="mt-10 space-y-16 lg:mt-16 lg:space-y-20">
            <div style="opacity: 1; transform: none;">
              <div class="relative grid grid-cols-1 gap-8 md:grid-cols-[0.8fr_1fr] lg:grid-cols-[0.4fr_1fr]">
                <img class="_image_bh1ht_4 IMAGE rounded-lg bg-slate-100  w-full h-full object-cover aspect-[16/10]  md:aspect-[1/1]" src="images/image6.jpg" style="background-color: transparent;">
                <div>
                  <div class="flex items-center gap-x-4 text-xs">
                    <time datetime="2023-10-10" class="text-slate-500 dark:text-white/80">
                      <div class="_editable_jwu41_1 undefined">Oct 10, 2023</div>
                    </time>
                    <button class="TEXT-LINK relative z-10 rounded-full bg-slate-50 px-3 py-1.5 font-medium text-sky-500 hover:bg-slate-100 dark:bg-slate-600 dark:text-white/80 dark:hover:bg-slate-700">
                      <div class="_editable_jwu41_1 undefined">Elecciones</div>
                    </button>
                  </div>
                  <div class="group relative max-w-xl">
                    <h3 class="TITLE-SECONDARY mt-3 text-lg font-semibold leading-6 text-slate-900 group-hover:text-slate-600 dark:text-white/90 dark:group-hover:text-white/80">
                      <div class="_editable_jwu41_1 undefined">Análisis de las Elecciones Presidenciales 2023</div>
                    </h3>
                    <p class="DESC mt-5 text-sm leading-6 text-slate-600 dark:text-white/80">
                      <div class="_editable_jwu41_1 undefined">Descubre el impacto de las últimas encuestas y cómo los candidatos están ajustando sus estrategias.</div>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div style="opacity: 1; transform: none;">
              <div class="relative grid grid-cols-1 gap-8 md:grid-cols-[0.8fr_1fr] lg:grid-cols-[0.4fr_1fr]">
                <img class="_image_bh1ht_4 IMAGE rounded-lg bg-slate-100  w-full h-full object-cover aspect-[16/10]  md:aspect-[1/1]" src="images/image3.jpg" style="background-color: transparent;">
                <div>
                  <div class="flex items-center gap-x-4 text-xs">
                    <time datetime="2023-10-12" class="text-slate-500 dark:text-white/80">
                      <div class="_editable_jwu41_1 undefined">Oct 12, 2023</div>
                    </time>
                    <button class="TEXT-LINK relative z-10 rounded-full bg-slate-50 px-3 py-1.5 font-medium text-sky-500 hover:bg-slate-100 dark:bg-slate-600 dark:text-white/80 dark:hover:bg-slate-700">
                      <div class="_editable_jwu41_1 undefined">Redes Sociales</div>
                    </button>
                  </div>
                  <div class="group relative max-w-xl">
                    <h3 class="TITLE-SECONDARY mt-3 text-lg font-semibold leading-6 text-slate-900 group-hover:text-slate-600 dark:text-white/90 dark:group-hover:text-white/80">
                      <div class="_editable_jwu41_1 undefined">El Rol de las Redes Sociales en la Política Moderna</div>
                    </h3>
                    <p class="DESC mt-5 text-sm leading-6 text-slate-600 dark:text-white/80">
                      <div class="_editable_jwu41_1 undefined">Un análisis sobre cómo las plataformas digitales están transformando la comunicación política.</div>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="px-4 py-10 bg-white dark:bg-slate-800 sm:py-16 lg:py-20">
      <div class="mx-auto px-4 py-10 max-w-7xl">
        <div class="text-center">
          <h2 class="TITLE-PRIMARY text-4xl font-semibold text-slate-900 dark:text-slate-50">
            <div class="_editable_jwu41_1 undefined">Categorías de Noticias</div>
          </h2>
        </div>
        <div class="grid gap-5 mt-12 sm:grid-cols-2 xl:grid-cols-3 sm:gap-8 xl:gap-12">
          <div class="relative overflow-hidden transition-all duration-500 rounded-lg bg-slate-100 hover:bg-slate-200 dark:bg-slate-600 dark:hover:bg-slate-700 p-6 lg:px-10 lg:py-8">
            <div class="flex items-center space-x-8">
              <div class="text-2xl text-sky-600 dark:text-sky-400">
                <i class="fa-solid fa-check-to-slot"></i>
              </div>
              <div class="w-px h-12 bg-black/10 dark:bg-white/10"></div>
              <div>
                <h3 class="text-lg font-semibold text-slate-900 dark:text-slate-200">Elecciones</h3>
                <p class="mt-2 text-base font-normal text-slate-700 dark:text-slate-300">120</p>
              </div>
            </div>
          </div>
          <div class="relative overflow-hidden transition-all duration-500 rounded-lg bg-slate-100 hover:bg-slate-200 dark:bg-slate-600 dark:hover:bg-slate-700 p-6 lg:px-10 lg:py-8">
            <div class="flex items-center space-x-8">
              <div class="text-2xl text-sky-600 dark:text-sky-400">
                <i class="fa-solid fa-chart-bar"></i>
              </div>
              <div class="w-px h-12 bg-black/10 dark:bg-white/10"></div>
              <div>
                <h3 class="text-lg font-semibold text-slate-900 dark:text-slate-200">Encuestas</h3>
                <p class="mt-2 text-base font-normal text-slate-700 dark:text-slate-300">80</p>
              </div>
            </div>
          </div>
          <div class="relative overflow-hidden transition-all duration-500 rounded-lg bg-slate-100 hover:bg-slate-200 dark:bg-slate-600 dark:hover:bg-slate-700 p-6 lg:px-10 lg:py-8">
            <div class="flex items-center space-x-8">
              <div class="text-2xl text-sky-600 dark:text-sky-400">
                <i class="fa-solid fa-user-tie"></i>
              </div>
              <div class="w-px h-12 bg-black/10 dark:bg-white/10"></div>
              <div>
                <h3 class="text-lg font-semibold text-slate-900 dark:text-slate-200"> Candidatos</h3>
                <p class="mt-2 text-base font-normal text-slate-700 dark:text-slate-300">50</p>
              </div>
            </div>
          </div>
          <div class="relative overflow-hidden transition-all duration-500 rounded-lg bg-slate-100 hover:bg-slate-200 dark:bg-slate-600 dark:hover:bg-slate-700 p-6 lg:px-10 lg:py-8">
            <div class="flex items-center space-x-8">
              <div class="text-2xl text-sky-600 dark:text-sky-400">
                <i class="fa-solid fa-lightbulb"></i>
              </div>
              <div class="w-px h-12 bg-black/10 dark:bg-white/10"></div>
              <div>
                <h3 class="text-lg font-semibold text-slate-900 dark:text-slate-200">Análisis Político</h3>
                <p class="mt-2 text-base font-normal text-slate-700 dark:text-slate-300">70</p>
              </div>
            </div>
          </div>
          <div style="opacity: 1; transform: none;">
            <div class="relative overflow-hidden transition-all duration-500 rounded-lg bg-slate-100 hover:bg-slate-200 dark:bg-slate-600 dark:hover:bg-slate-700 p-6 lg:px-10 lg:py-8">
              <div class="flex items-center space-x-8">
                <div class="text-2xl text-sky-600 dark:text-sky-400">
                  <i class="fa-solid fa-globe"></i>
                </div>
                <div class="w-px h-12 bg-black/10 dark:bg-white/10"></div> <div>
                  <h3 class="text-lg font-semibold text-slate-900 dark:text-slate-200">Internacional</h3>
                  <p class="mt-2 text-base font-normal text-slate-700 dark:text-slate-300">40</p>
                </div>
              </div>
            </div>
          </div>
          <div style="opacity: 1; transform: none;">
            <div class="relative overflow-hidden transition-all duration-500 rounded-lg bg-slate-100 hover:bg-slate-200 dark:bg-slate-600 dark:hover:bg-slate-700 p-6 lg:px-10 lg:py-8">
              <div class="flex items-center space-x-8">
                <div class="text-2xl text-sky-600 dark:text-sky-400">
                  <i class="fa-solid fa-comments"></i>
                </div>
                <div class="w-px h-12 bg-black/10 dark:bg-white/10"></div>
                <div>
                  <h3 class="text-lg font-semibold text-slate-900 dark:text-slate-200">Opiniones
                  </h3>
                  <p class="mt-2 text-base font-normal text-slate-700 dark:text-slate-300">30</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="isolate overflow-hidden bg-white dark:bg-slate-800 px-6 lg:px-8">
      <div class="relative mx-auto max-w-2xl py-16 sm:py-20 lg:max-w-4xl">
        <div class="absolute left-1/2 top-0 -z-10 h-[50rem] w-[90rem] -translate-x-1/2 bg-[radial-gradient(50%_100%_at_top,theme(colors.sky.100),transparent)] opacity-20 lg:left-36">
        </div>
        <div class="absolute inset-y-0 right-1/2 -z-10 mr-12 w-[150vw] origin-bottom-left skew-x-[-30deg] bg-white dark:bg-slate-700 shadow-xl shadow-sky-600/10 ring-1 ring-sky-50 dark:ring-slate-700 sm:mr-20 md:mr-0 lg:right-full lg:-mr-36 lg:origin-center">
        </div>
        <figure class="grid grid-cols-1 items-center gap-x-6 gap-y-8 lg:gap-x-10">
          <div class="relative col-span-2 lg:col-start-1 lg:row-start-2">
            <blockquote class="DESC text-xl font-semibold leading-8 text-gray-900 dark:text-white/80 sm:text-2xl sm:leading-9">
              <div class="_editable_jwu41_1 undefined">
                La política actual requiere un análisis profundo y objetivo para comprender los desafíos y oportunidades que
                enfrentamos como sociedad.</div>
            </blockquote>
          </div>
          <div class="col-end-1 w-16 lg:row-span-4 lg:w-72">
            <img class="_image_bh1ht_4 IMAGE rounded-xl bg-sky-50 dark:bg-slate-700 lg:rounded-3xl w-full aspect-square object-cover"
              src="images/image1.jpg" style="background-color: transparent;">
          </div>
          <figcaption class="text-base lg:col-start-1 lg:row-start-3">
            <div class="TITLE-PRIMARY font-semibold text-gray-900 dark:text-white/80">
              <div class="_editable_jwu41_1 undefined">María Fernández</div>
            </div>
            <div class="TITLE-SECONDARY mt-1 text-gray-500 dark:text-white/60">
              <div class="_editable_jwu41_1 undefined">Experta en CienciasPolíticas</div>
            </div>
          </figcaption>
        </figure>
      </div>
      </section>
      <div class="w-full bg-white dark:bg-slate-800">
        <div class="w-full max-w-7xl mx-auto py-20 px-4">
          <div>
            <ul class="filter-options flex flex-wrap justify-start gap-2 mb-6">
              <li class="inline-block">
                <button class="inline-flex items-center justify-center font-medium border py-1.5 px-5 focus:outline-none hover:bg-slate-100 rounded-full text-sm sm:text-base 2xl:text-lg transition-colors duration-500 dark:hover:bg-slate-600  dark:border-slate-800 bg-sky-50 border-sky-200 text-sky-600 dark:bg-white">
                  <div class="_editable_jwu41_1 undefined">Elecciones</div>
                </button>
              </li>
              <li class="inline-block">
                <button class="inline-flex items-center justify-center font-medium border py-1.5 px-5 focus:outline-none hover:bg-slate-100 rounded-full text-sm sm:text-base 2xl:text-lg transition-colors duration-500 dark:hover:bg-slate-600  dark:border-slate-800 text-slate-900 hover:bg-sky-400 dark:text-slate-200 dark:hover:text-white">
                  <div class="_editable_jwu41_1 undefined">Encuestas</div>
                </button>
              </li>
              <li class="inline-block">
                <button class="inline-flex items-center justify-center font-medium border py-1.5 px-5 focus:outline-none hover:bg-slate-100 rounded-full text-sm sm:text-base 2xl:text-lg transition-colors duration-500 dark:hover:bg-slate-600  dark:border-slate-800 text-slate-900 hover:bg-sky-400 dark:text-slate-200 dark:hover:text-white">
                  <div class="_editable_jwu41_1 undefined">Candidatos</div>
                </button>
              </li>
            </ul>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <div style="opacity: 1; transform: none;">
              <div class="relative overflow-hidden rounded-lg shadow-lg group bg-slate-100 dark:bg-slate-900">
                <img class="_image_bh1ht_4 transition-transform object-cover w-full h-auto aspect-[4/3] duration-500 ease-in-out transform group-hover:scale-110" src="images/image1.jpg" style="background-color: transparent;">
                <div class="absolute inset-0 pointer-events-none bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="absolute flex pointer-events-none items-center gap-1.5 bottom-0 left-0 p-6 z-10 bg-gradient-to-t from-black w-full"></div>
                <div class="absolute flex items-center gap-1.5 bottom-0 left-0 p-4 z-20">
                  <p class="TITLE-PRIMARY text-white text-lg font-semibold">Participación Electoral</p>
                  <p class="DESC text-xs inline-flex p-1.5 rounded font-medium bg-white/20 text-white">Elecciones</p>
                </div>
              </div>
            </div>
            <div style="opacity: 1; transform: none;">
              <div class="relative overflow-hidden rounded-lg shadow-lg group bg-slate-100 dark:bg-slate-900">
                <img class="_image_bh1ht_4 transition-transform object-cover w-full h-auto aspect-[4/3] duration-500 ease-in-out transform group-hover:scale-110" src="images/image2.jpg" style="background-color: transparent;">
                <div class="absolute inset-0 pointer-events-none bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="absolute flex pointer-events-none items-center gap-1.5 bottom-0 left-0 p-6 z-10 bg-gradient-to-t from-black w-full"></div>
                <div class="absolute flex items-center gap-1.5 bottom-0 left-0 p-4 z-20">
                  <p class="TITLE-PRIMARY text-white text-lg font-semibold">Campañas Políticas</p>
                  <p class="DESC text-xs inline-flex p-1.5 rounded font-medium bg-white/20 text-white">Campaña</p>
                </div>
              </div>
            </div>
            <div style="opacity: 1; transform: none;">
              <div class="relative overflow-hidden rounded-lg shadow-lg group bg-slate-100 dark:bg-slate-900">
                <img class="_image_bh1ht_4 transition-transform object-cover w-full h-auto aspect-[4/3] duration-500 ease-in-out transform group-hover:scale-110" src="images/image3.jpg" style="background-color: transparent;">
                <div class="absolute inset-0 pointer-events-none bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="absolute flex pointer-events-none items-center gap-1.5 bottom-0 left-0 p-6 z-10 bg-gradient-to-t from-black w-full"></div>
                <div class="absolute flex items-center gap-1.5 bottom-0 left-0 p-4 z-20">
                  <p class="TITLE-PRIMARY text-white text-lg font-semibold">Debates Presidenciales</p>
                  <p class="DESC text-xs inline-flex p-1.5 rounded font-medium bg-white/20 text-white">Debate</p>
                </div>
              </div>
            </div>
            <div style="opacity: 1; transform: none;">
              <div class="relative overflow-hidden rounded-lg shadow-lg group bg-slate-100 dark:bg-slate-900">
                <img class="_image_bh1ht_4 transition-transform object-cover w-full h-auto aspect-[4/3] duration-500 ease-in-out transform group-hover:scale-110" src="images/image4.jpg" style="background-color: transparent;">
                <div class="absolute inset-0 pointer-events-none bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="absolute flex pointer-events-none items-center gap-1.5 bottom-0 left-0 p-6 z-10 bg-gradient-to-t from-black w-full"></div>
                <div class="absolute flex items-center gap-1.5 bottom-0 left-0 p-4 z-20">
                  <p class="TITLE-PRIMARY text-white text-lg font-semibold">Proceso de Votación</p>
                  <p class="DESC text-xs inline-flex p-1.5 rounded font-medium bg-white/20 text-white">Votación</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="overflow-hidden bg-white py-24 dark:bg-slate-800">
        <div class="mx-auto max-w-7xl px-6 lg:flex lg:px-8">
          <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-12 gap-y-16 lg:mx-0 lg:min-w-full lg:max-w-none lg:flex-none lg:gap-y-8">
            <div class="lg:col-end-1 lg:w-full lg:max-w-lg lg:pb-8">
              <h2 class="TITLE-PRIMARY text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl dark:text-slate-50">
                <div class="_editable_jwu41_1 undefined">Participa en el Cambio</div>
              </h2>
              <p class="DESC mt-6 text-xl leading-8 text-gray-600 dark:text-slate-300">
              <div class="_editable_jwu41_1 undefined">Contribuye al análisis político y participa en nuestras encuestas para dar forma al futuro.</div>
              </p>
              <p class="DESC mt-6 text-base leading-7 text-gray-600 dark:text-slate-300">
                <div class="_editable_jwu41_1 undefined">Únete a nuestra comunidad de expertos y ciudadanos comprometidos con la política actual.</div>
              </p>
              <div class="mt-10 flex">
                <button class="BTN-PRIMARY flex group gap-1 items-center justify-center text-white bg-sky-500 font-medium border-0 py-2 xl:py-3 px-6 focus:outline-none hover:bg-sky-400 rounded-lg text-sm sm:text-base 2xl:text-lg transition-colors duration-500 dark:hover:bg-slate-600">
                  <div class="_editable_jwu41_1 undefined">Participar</div>
                  <span class="group-hover:translate-x-1 transition-all duration-300">→</span>
                </button>
              </div>
            </div>
            <div class="flex flex-wrap items-start justify-end gap-6 sm:gap-8 lg:contents">
              <div class="w-0 flex-auto lg:ml-auto lg:w-auto lg:flex-none lg:self-end">
                <img  class="_image_bh1ht_4 IMAGE aspect-[7/5] w-[37rem] max-w-none rounded-2xl bg-slate-100 object-cover"
                  src="images/image6.jpg"
                  style="background-color: transparent;"></div>
              <div class="contents lg:col-span-2 lg:col-end-2 lg:ml-auto lg:flex lg:w-[37rem] lg:items-start lg:justify-end lg:gap-x-8">
                <div class="order-first flex w-64 flex-none justify-end self-end lg:w-auto">
                  <img class="_image_bh1ht_4 IMAGE aspect-[4/3] w-[24rem] max-w-none flex-none rounded-2xl bg-slate-100 object-cover"
                    src="images/image2.jpg" style="background-color: transparent;"></div>
                <div class="flex w-96 flex-auto justify-end lg:w-auto lg:flex-none">
                  <img class="_image_bh1ht_4 IMAGE aspect-[7/5] w-[37rem] max-w-none flex-none rounded-2xl bg-slate-100 object-cover"
                    src="images/image3.jpg" style="background-color: transparent;"></div>
                <div class="hidden sm:block sm:w-0 sm:flex-auto lg:w-auto lg:flex-none">
                  <img class="_image_bh1ht_4 IMAGE aspect-[4/3] w-[24rem] max-w-none rounded-2xl bg-slate-100 object-cover"
                    src="images/image4.jpg" style="background-color: transparent;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="relative isolate overflow-hidden bg-sky-500">
        <div class="px-6 py-16 sm:px-6 sm:py-20 lg:px-8">
          <div class="mx-auto max-w-2xl text-center">
            <h2 class="TITLE-PRIMARY text-3xl font-bold tracking-tight text-white sm:text-4xl">
              <div class="_editable_jwu41_1 undefined">Explora Más Recursos</div>
            </h2>
            <p class="DESC mx-auto mt-6 max-w-xl text-lg leading-8 text-white/80">Accede a análisis detallados, encuestas exclusivas y noticias de última hora. ¡Forma parte de nuestra comunidad
              informada!</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
              <button class="BTN-PRIMARY inline-flex items-center justify-center text-slate-800 bg-white font-medium border-0 py-2 xl:py-3 px-6 focus:outline-none hover:bg-white/80 rounded-lg text-sm sm:text-base 2xl:text-lg transition-colors duration-500">
                <div class="_editable_jwu41_1 undefined">Comenzar Ahora</div>
              </button>
              <button class="BTN-SECONDARY flex group gap-1 items-center justify-center text-white bg-sky-500 font-medium border-0 py-2 xl:py-3 px-6 focus:outline-none hover:bg-sky-400 rounded-lg text-sm sm:text-base 2xl:text-lg transition-colors duration-500 dark:hover:bg-slate-600">
                <div class="_editable_jwu41_1 undefined">Aprender Más</div>
                <span class="group-hover:translate-x-1 transition-all duration-300">→</span>
              </button>
            </div>
          </div>
        </div>
      </div>
      <footer class="py-10 bg-white dark:bg-slate-800">
        <div style="opacity: 1; transform: none;">
          <div class="px-4 mx-auto max-w-7xl py-10 flex flex-col items-center gap-16">
            <ul class="w-full grid grid-cols-2 text-center  gap-6 md:grid-cols-5">
              <li href="">
                <button class="TEXT-LINK inline-flex text-lg font-medium text-slate-900 dark:text-slate-50 hover:text-sky-400 focus:text-sky-500 dark:hover:text-sky-400 dark:focus:text-sky-500">
                  <div class="_editable_jwu41_1 undefined">Acerca de GP CANAL</div>
                </button>
              </li>
              <li href="">
                <button
                  class="TEXT-LINK inline-flex text-lg font-medium text-slate-900 dark:text-slate-50 hover:text-sky-400 focus:text-sky-500 dark:hover:text-sky-400 dark:focus:text-sky-500">
                  <div class="_editable_jwu41_1 undefined">Noticias Políticas</div>
                </button>
              </li>
              <li href="">
                <button class="TEXT-LINK inline-flex text-lg font-medium text-slate-900 dark:text-slate-50 hover:text-sky-400 focus:text-sky-500 dark:hover:text-sky-400 dark:focus:text-sky-500">
                  <div class="_editable_jwu41_1 undefined">Encuestas y Resultados</div>
                </button>
              </li>
              <li href="">
                <button class="TEXT-LINK inline-flex text-lg font-medium text-slate-900 dark:text-slate-50 hover:text-sky-400 focus:text-sky-500 dark:hover:text-sky-400 dark:focus:text-sky-500">
                  <div class="_editable_jwu41_1 undefined">Candidatos</div>
                </button>
              </li>
              <li href="">
                <button class="TEXT-LINK inline-flex text-lg font-medium text-slate-900 dark:text-slate-50 hover:text-sky-400 focus:text-sky-500 dark:hover:text-sky-400 dark:focus:text-sky-500">
                  <div class="_editable_jwu41_1 undefined">Contacto</div>
                </button>
              </li>
            </ul>
            <div class="flex flex-col gap-6">
              <ul class="flex items-center justify-center gap-6">
                <li>
                  <button class="inline-flex items-center justify-center w-10 h-10 text-slate-900 transition-all duration-200 rounded-full hover:bg-sky-400 hover:text-slate-50 focus:outline-none focus:bg-slate-500 focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 dark:hover:bg-sky-400 dark:focus:bg-sky-500 dark:text-slate-50">
                    <div class="_icon-wrapper_1a3wa_1 _cursor-pointer_1a3wa_6 text-xl" data-library="FontAwesome">
                      <i class="fa-brands fa-x-twitter"></i></div>
                  </button>
                </li>
                <li>
                  <button class="inline-flex items-center justify-center w-10 h-10 text-slate-900 transition-all duration-200 rounded-full hover:bg-sky-400 hover:text-slate-50 focus:outline-none focus:bg-slate-500 focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 dark:hover:bg-sky-400 dark:focus:bg-sky-500 dark:text-slate-50">
                    <div class="_icon-wrapper_1a3wa_1 _cursor-pointer_1a3wa_6 text-xl" data-library="FontAwesome">
                      <i class="fa-brands fa-facebook-f"></i></div>
                  </button>
                </li>
                <li>
                  <button class="inline-flex items-center justify-center w-10 h-10 text-slate-900 transition-all duration-200 rounded-full hover:bg-sky-400 hover:text-slate-50 focus:outline-none focus:bg-slate-500 focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 dark:hover:bg-sky-400 dark:focus:bg-sky-500 dark:text-slate-50">
                    <div class="_icon-wrapper_1a3wa_1 _cursor-pointer_1a3wa_6 text-xl" data-library="FontAwesome">
                      <i class="fa-brands fa-instagram"></i></div>
                  </button>
                </li>
                <li>
                  <button class="inline-flex items-center justify-center w-10 h-10 text-slate-900 transition-all duration-200 rounded-full hover:bg-sky-400 hover:text-slate-50 focus:outline-none focus:bg-slate-500 focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 dark:hover:bg-sky-400 dark:focus:bg-sky-500 dark:text-slate-50">
                    <div class="_icon-wrapper_1a3wa_1 _cursor-pointer_1a3wa_6 text-xl" data-library="FontAwesome">
                      <i class="fa-brands fa-linkedin"></i></div>
                  </button>
                </li>
                <li>
                  <button
                    class="inline-flex items-center justify-center w-10 h-10 text-slate-900 transition-all duration-200 rounded-full hover:bg-sky-400 hover:text-slate-50 focus:outline-none focus:bg-slate-500 focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 dark:hover:bg-sky-400 dark:focus:bg-sky-500 dark:text-slate-50">
                    <div class="_icon-wrapper_1a3wa_1 _cursor-pointer_1a3wa_6 text-xl" data-library="FontAwesome">
                      <i class="fa-brands fa-whatsapp"></i>
                    </div>
                  </button>
                </li>
              </ul>
              <p class="DESC text-base font-normal text-center text-slate-600 dark:text-white/80">
              <div class="_editable_jwu41_1 undefined"
                data-link="link=&amp;target=_blank&amp;text=%C2%A9%202023%20GP%20CANAL.%20Todos%20los%20derechos%20reservados.">
                © 2023 GP CANAL. Todos los derechos reservados.</div>
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>


</body></html>
