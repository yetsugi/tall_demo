import Alpine from 'alpinejs'
 
window.Alpine = Alpine

document.addEventListener('alpine:init', () => {
    Alpine.data('app', () => ({
        sidebarOpen: false,

        profileMenuOpen: false,
     
        get darkTheme() {
            if ('darkTheme' in localStorage) {
                return JSON.parse(localStorage.getItem('darkTheme'));
            }

            return window.matchMedia('(prefers-color-scheme: dark)').matches;
        },

        set darkTheme(enabled) { localStorage.setItem('darkTheme', enabled) },

        toggleProfileMenu() { this.profileMenuOpen = ! this.profileMenuOpen },
        
        toggleTheme() { this.darkTheme = ! this.darkTheme }
    }))
})
 
window.Alpine.start()
