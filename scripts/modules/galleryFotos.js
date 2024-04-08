const container = document.getElementById('gallery-main-section')

class GalleryFotos {
    constructor(src, alt) {
        this.src = src
        this.alt = alt
    }

    render() {
        const img = document.createElement('img')
        img.src = this.src
        img.alt = this.alt
        container.appendChild(img)
    }
}

export default GalleryFotos