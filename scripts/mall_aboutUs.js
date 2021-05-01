//additional data
const data = {
    Minh: {
        otherName: "momocloud",
        age: 21,
        experience: "Web development and anime related stuff",
        hobby: "read books and play games"
    },
    Dat: {
        otherName: "dat",
        age: 21,
        experience: "Web development",
        hobby: "read books and play games"
    },
    Anh: {
        otherName: "quang anh",
        age: 21,
        experience: "Web development",
        hobby: "read books and play games"
    },
    Phat: {
        otherName: "phat",
        age: 21,
        experience: "Web development",
        hobby: "read books and play games"
    }
}

let allImgs = document.querySelectorAll(".card img");


for (let i = 0; i < allImgs.length; i++){
    console.log(allImgs[i]);
    allImgs[i].addEventListener("click", () => {
        let box = document.createElement("div");

        let otherName = document.createElement("div");
        otherName.textContent = data[allImgs[i].alt].otherName;
        box.appendChild(otherName);

        let age = document.createElement("div");
        age.textContent = data[allImgs[i].alt].age;
        box.appendChild(age);

        let experience = document.createElement("div");
        experience.textContent = data[allImgs[i].alt].experience;
        box.appendChild(experience);

        let hobby = document.createElement("div");
        hobby.textContent = data[allImgs[i].alt].hobby;
        box.appendChild(hobby);

        box.classList.add("member_info");

        let blurBackground = document.createElement("div");
        blurBackground.classList.add("blurBackground");

        //events
        box.addEventListener("click", function(){
            box.remove();
            blurBackground.remove();
        });
        
        let body = document.querySelector("body");

        body.appendChild(blurBackground);
        body.appendChild(box);
    }); 
}


