const filterBtn = document.querySelectorAll('.filter_btn')
const course = document.querySelectorAll('article')
const search = document.getElementById("courseSearchInput")
const courseTitle = document.querySelectorAll('.course_title')
filterBtn.forEach(b=>{
    b.addEventListener('click', ()=>{
        filterBtn.forEach(b=>b.classList.remove('active'))
        const filter = b.getAttribute('data-filter')
        course.forEach(c=>{
            b.classList.add('active')
            const category = c.getAttribute('data-category')
            if(filter === category || filter === 'all'){
                c.style.display = 'flex'
            }else{
                c.style.display = 'none'
            }
        })

    })
})


search.addEventListener('input', ()=>{
    const value = search.value.text
    courseTitle.forEach(c=>{
        if(value===c.textContent || value===''){
            c.closest('.course_card').style.display = 'flex'
        }else{
            c.closest('.course_card').style.display = 'none'
        }
    })
})


