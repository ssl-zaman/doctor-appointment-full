import InputField from '@/Components/Form/InputField'
import FileInput from '@/Components/Form/FileInput'
import MainLayout from '@/Layouts/MainLayout'
import { useForm, Link } from '@inertiajs/react'


const Create = () => {

    const {data, setData, post, errors} = useForm({
        title1: "",
        title2: "",
        image: null,
        components: [
            { title: "", description: "", image: null },
            { title: "", description: "", image: null },
        ],
    });

    console.log("error_start---------------")
    console.log(errors);
    console.log("error_end---------------")


    // Handle input changes correctly
    const handleChange = (e) => {
        const { name, value, type, checked } = e.target;
        setData(name, type === "checkbox" ? checked : value);
    };


    const handleFileChange = (e) => {
        const { name, files } = e.target;
        setData(name, files[0]);
    };


            // Handling changes inside components array
        const handleComponentChange = (index, key, value) => {
            setData("components", data.components.map((comp, i) =>
                i === index ? { ...comp, [key]: value } : comp
            ));
        };

        // Handling file changes inside components array
        const handleComponentFileChange = (index, e) => {
            const { name, files } = e.target;
            setData("components", data.components.map((comp, i) =>
                i === index ? { ...comp, [name]: files[0] } : comp
            ));
        };


    const handleSubmit = (e) =>
    {
        e.preventDefault();
        post(route('slider.store'), data)
        console.log(data)
    }


  return (
    <MainLayout>
        <h2 class="text-2xl font-bold">Slider Create</h2>
        <div className='p-10 rounded-md bg-white shadow-md'>
            <form onSubmit={handleSubmit} encType="multipart/form-data" className='space-y-4'>
                <InputField label="First title" name="title1" value={data.title1 || ""} onChange={handleChange} placeholder="Write your first title" error={errors.title1}/>
                <InputField label="Second title" name="title2" value={data.title2 || ""} onChange={handleChange} placeholder="Write your second title" error={errors.title2}/>
                <FileInput
                    label="Slider Background Image"
                    name="image"
                    onChange={handleFileChange}
                    defaultFile={data.image}
                    error={errors.image}
                />

                <h3>Slider Components</h3>
                {data.components.map((component, index) => (
                    <div key={index}>
                        <InputField label="Component Title" name={`components[${index}].title`} value={component.title} onChange={(e) => handleComponentChange(index, "title", e.target.value)} error={errors[`components.${index}.title`]} />
                        <InputField label="Component Description" name={`components[${index}].description`} value={component.description} onChange={(e) => handleComponentChange(index, "description", e.target.value)} error={errors[`components.${index}.description`]} />
                        <FileInput label="Component Image" name="image" onChange={(e) => handleComponentFileChange(index, e)} error={errors[`components.${index}.image`]} />
                    </div>
                ))}



                <div className='flex gap-5'>
                    <button
                        type="submit"
                        class="bg-blue-500 text-white px-5 py-3 rounded"
                    >
                        Submit
                    </button>
                    {/* <Link href={route('slider.index')} className='bg-red-500 text-white px-5 py-3 rounded'>
                        Cancel
                    </Link> */}
                </div>

            </form>
        </div>
    </MainLayout>
  )
}

export default Create
