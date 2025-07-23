
function closeEditModal() {
    document.getElementById('editUserModal').style.display = 'none';
}

function openEditUserModal(userId) {
    fetch('/ajax/getUser/' + userId)
        .then(response => response.json())
        .then(data => {
            if (data && data.id) {
                document.getElementById('edit-id').value = data.id;
                document.getElementById('edit-user').value = data.user;
                document.getElementById('edit-name').value = data.name;
                document.getElementById('edit-surname').value = data.surname;
                document.getElementById('edit-mail').value = data.mail;
                document.getElementById('edit-admin').value = data.admin;
                document.getElementById('edit-password').value = '';
                document.getElementById('editUserModal').style.display = 'block';
            }
        });
}
