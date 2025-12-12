// resources/js/app.js

require('./bootstrap');

// Инициализация компонентов Bootstrap
document.addEventListener('DOMContentLoaded', () => {
    console.log('🚀 Приложение загружено');
    
    // Инициализация всех popover
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
    popoverTriggerList.forEach(el => {
        new bootstrap.Popover(el);
    });
    
    // Инициализация всех tooltip
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    tooltipTriggerList.forEach(el => {
        new bootstrap.Tooltip(el);
    });
    
    // Автоскрытие алертов
    const alerts = document.querySelectorAll('.alert-dismissible');
    alerts.forEach(alert => {
        setTimeout(() => {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        }, 5000);
    });
});

// Подтверждение удаления
window.confirmDelete = function(formId) {
    if (confirm('Вы уверены, что хотите удалить этот клуб?')) {
        document.getElementById(formId).submit();
    }
    return false;
};