$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $("#searchField").on("keyup", function () {
        let value = $(this).val().toLowerCase();
        $.ajax({
            url: "/search",
            type: "GET",
            data: {
                search: value,
            },
            success: function (response) {
                // console.log(response);
                response.forEach((user) => {
                    $("#results").empty();
                    // let username = user.username;
                    // let name = user.name;
                    // let profileImage = user.avatar;
                    // let id = user.id;
                    let html = `<div class="flex items-center hover:bg-[#202532] cursor-pointer transition duration-150 ease-out hover:ease-in rounded h-[50px]">
                                        <img src="${user.avatar}" class="rounded-full w-[30px] h-[30px] ml-2">
                                        <a href="/profile/${user.username}">
                                            <span class="px-2 text-white text-[14px]">
                                                ${user.name}
                                            </span>
                                        </a>
                                </div>`;
                    $("#results").append(html);
                });
            },
        });
    });
});
