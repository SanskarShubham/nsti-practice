document.addEventListener('DOMContentLoaded', () => {
    loadTasks();

    document.getElementById('taskForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const task = document.getElementById('taskInput').value;

        fetch('save_task.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: `task=${task}`
        }).then(() => {
            document.getElementById('taskInput').value = '';
            loadTasks();
        });
    });

    function loadTasks() {
        fetch('get_tasks.php')
            .then(response => response.json())
            .then(tasks => {
                const taskList = document.getElementById('taskList');
                taskList.innerHTML = '';
                tasks.forEach((task, index) => {
                    taskList.innerHTML += `
                        <li>
                            ${task}
                            <button onclick="deleteTask(${index})">❌</button>
                        </li>
                    `;
                });
            });
    }

    window.deleteTask = function(index) {
        fetch(`delete_task.php?index=${index}`)
            .then(() => loadTasks());
    }
});
