let submitButton = document.getElementById("submitButton");
const updateButton = document.getElementById("updateButton");
const hiddenInput = document.getElementById("hidden");

const base_url = import.meta.env.VITE_BASE_URL;

const createAirline = async () => {
    let name = document.getElementById("name").value;
    let description = document.getElementById("description").value;

    return await fetch(`${base_url}/api/airline`, {
        method: "POST",
        mode: "cors",
        cache: "no-cache",
        credentials: "same-origin",

        headers: {
            "Content-Type": "application/json",
        },
        redirect: "follow",
        referrerPolicy: "no-referrer",
        body: JSON.stringify({
            name,
            description,
        }),
    }).then(() => {
        window.location.reload();
    });
};

const deleteAirline = async (airlineId) => {
    return await fetch(`${base_url}/api/airline/${airlineId}`, {
        method: "DELETE",
    }).then(() => window.location.reload());
};

submitButton.addEventListener("click", createAirline);

document.querySelectorAll(".deleteButton").forEach((button) => {
    button.addEventListener("click", function () {
        const id = this.getAttribute("data-id");
        deleteAirline(id);
    });
});

const modal = document.getElementById("modal");
const closeModalButton = document.getElementById("closeModalButton");
const openModalButton = document.getElementById("openModalButton");

closeModalButton.addEventListener(
    "click",
    () => (modal.style.display = "none")
);

openModalButton.addEventListener(
    "click",
    () => (modal.style.display = "block")
);

const updateAirline = async (airlineId) => {
    const name = document.getElementById("updateName");
    const description = document.getElementById("updateDescription");

    return await fetch(`${base_url}/api/airline?airline=${airlineId}`, {
        method: "PUT",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({
            name,
            description,
        }),
    });
};

document.addEventListener("DOMContentLoaded", function () {
    const openModalButtons = document.querySelectorAll("#openModalButton");

    openModalButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const airlineId = button.getAttribute("data-id");

            document.getElementById("hidden").value = airlineId;
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    document
        .getElementById("updateForm")
        .addEventListener("submit", function () {
            const airlineId = document.getElementById("hidden").value;
            const name = document.getElementById("updateName").value;
            const description =
                document.getElementById("updateDescription").value;

            const formData = {
                name: name,
                description: description,
            };

            fetch(`${base_url}/api/airline/${airlineId}`, {
                method: "PUT",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(formData),
            }).then(() => {
                modal.style.display = "none";
            });
        });
});
