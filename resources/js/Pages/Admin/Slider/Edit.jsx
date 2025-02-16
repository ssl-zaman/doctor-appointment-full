import InputField from '@/Components/Form/InputField'
import FileInput from '@/Components/Form/FileInput'
import MainLayout from '@/Layouts/MainLayout'
import { useForm, usePage } from '@inertiajs/react'

const Edit = ({ slider }) => {

    console.log(slider);

    const { data, setData, put, errors } = useForm({
        title1: slider.title1 || "",
        title2: slider.title2 || "",
        image: slider.image,
        components: slider.components.map(comp => ({
            title: comp.title || "",
            description: comp.description || "",
            image: comp.image || null,
        }))
    });

    const handleChange = (e) => {
        const { name, value, type, checked } = e.target;
        setData(name, type === "checkbox" ? checked : value);
    };

    const handleFileChange = (e) => {
        const { name, files } = e.target;
        setData(name, files[0]);
    };

    const handleComponentChange = (index, key, value) => {
        setData("components", data.components.map((comp, i) =>
            i === index ? { ...comp, [key]: value } : comp
        ));
    };

    const handleComponentFileChange = (index, e) => {
        const { name, files } = e.target;
        setData("components", data.components.map((comp, i) =>
            i === index ? { ...comp, [name]: files[0] } : comp
        ));
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        put(route('slider.update', slider.id), data);
    };

    return (
        <MainLayout>
            <h2 className="text-2xl font-bold">Edit Slider</h2>
            <div className='p-10 rounded-md bg-white shadow-md'>
                <form onSubmit={handleSubmit} encType="multipart/form-data" className='space-y-4'>
                    <InputField label="First Title" name="title1" value={data.title1} onChange={handleChange} placeholder="Write your first title" error={errors.title1} />
                    <InputField label="Second Title" name="title2" value={data.title2} onChange={handleChange} placeholder="Write your second title" error={errors.title2} />
                    <FileInput label="Slider Background Image" name="image" onChange={handleFileChange} error={errors.image} defaultFile={data.image}/>

                    <h3>Slider Components</h3>
                    {data.components.map((component, index) => (
                        <div key={index}>
                            <InputField label="Component Title" name={`components[${index}].title`} value={component.title} onChange={(e) => handleComponentChange(index, "title", e.target.value)} error={errors[`components.${index}.title`]} />
                            <InputField label="Component Description" name={`components[${index}].description`} value={component.description} onChange={(e) => handleComponentChange(index, "description", e.target.value)} error={errors[`components.${index}.description`]} />
                            <FileInput label="Component Image" name="image" onChange={(e) => handleComponentFileChange(index, e)} error={errors[`components.${index}.image`]} defaultFile={component.image}/>
                        </div>
                    ))}

                    <div className='flex gap-5'>
                        <button type="submit" className="bg-blue-500 text-white px-5 py-3 rounded">Update</button>
                    </div>
                </form>
            </div>
        </MainLayout>
    );
};

export default Edit;
