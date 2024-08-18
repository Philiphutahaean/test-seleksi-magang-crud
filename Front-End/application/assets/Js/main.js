const apiUrl = "http://localhost:8080/api/";

function loadProyek() {
	$.ajax({
		url: apiUrl + "proyek",
		method: "GET",
		success: function (data) {
			let proyekList = "";
			data.forEach(function (proyek) {
				proyekList += `
                    <tr>
                        <td>${proyek.id}</td>
                        <td>${proyek.nama_proyek}</td>
                        <td>${proyek.client}</td>
                        <td>${proyek.tgl_mulai}</td>
                        <td>${proyek.tgl_selesai}</td>
                        <td>${proyek.pimpinan_proyek}</td>
                        <td>
                            <a href="proyek/edit/${proyek.id}" class="btn btn-warning btn-sm">Edit</a>
                            <button onclick="deleteProyek(${proyek.id})" class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                `;
			});
			$("#proyek-list").html(proyekList);
		},
		error: function (error) {
			console.error("Error fetching data:", error);
		},
	});
}

function tambahProyek() {
	const formData = {
		nama_proyek: $("#nama_proyek").val(),
		client: $("#client").val(),
		tgl_mulai: $("#tgl_mulai").val(),
		tgl_selesai: $("#tgl_selesai").val(),
		pimpinan_proyek: $("#pimpinan_proyek").val(),
		keterangan: $("#keterangan").val(),
	};

	$.ajax({
		url: apiUrl + "proyek",
		method: "POST",
		contentType: "application/json",
		data: JSON.stringify(formData),
		success: function (response) {
			alert("Proyek berhasil ditambahkan!");
			window.location.href = "proyek";
		},
		error: function (error) {
			console.error("Error saving data:", error);
		},
	});
}

function updateProyek() {
	const formData = {
		id: $("#id").val(),
		nama_proyek: $("#nama_proyek").val(),
		client: $("#client").val(),
		tgl_mulai: $("#tgl_mulai").val(),
		tgl_selesai: $("#tgl_selesai").val(),
		pimpinan_proyek: $("#pimpinan_proyek").val(),
		keterangan: $("#keterangan").val(),
	};

	$.ajax({
		url: apiUrl + "proyek/" + formData.id,
		method: "PUT",
		contentType: "application/json",
		data: JSON.stringify(formData),
		success: function (response) {
			alert("Proyek berhasil diupdate!");
			window.location.href = "proyek";
		},
		error: function (error) {
			console.error("Error updating data:", error);
		},
	});
}

function deleteProyek(id) {
	if (confirm("Apakah Anda yakin ingin menghapus proyek ini?")) {
		$.ajax({
			url: apiUrl + "proyek/" + id,
			method: "DELETE",
			success: function (response) {
				alert("Proyek berhasil dihapus!");
				loadProyek();
			},
			error: function (error) {
				console.error("Error deleting data:", error);
			},
		});
	}
}
