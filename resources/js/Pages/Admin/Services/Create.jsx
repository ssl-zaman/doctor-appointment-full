import InputField from '@/Components/Form/InputField'
import FileInput from '@/Components/Form/FileInput'
import MainLayout from '@/Layouts/MainLayout'
import { useForm, Link } from '@inertiajs/react'


const Create = () => {

    const {data, setData, post, errors} = useForm({
        name: "",
        description: "",
        icon: null,
        image: null,

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





    const handleSubmit = (e) =>
    {
        e.preventDefault();
        post(route('services.store'), data)
        console.log(data)
    }


  return (
    <MainLayout>
        <h2 class="text-2xl font-bold">Slider Create</h2>
        <div className='p-10 rounded-md bg-white shadow-md'>
            <form onSubmit={handleSubmit} encType="multipart/form-data" className='space-y-4'>
                <InputField label="Service Name" name="name" value={data.name || ""} onChange={handleChange} placeholder="Write your first title" error={errors.name}/>
                <InputField label="Service Description" name="description" value={data.description || ""} onChange={handleChange} placeholder="Write your second title" error={errors.description}/>
                <FileInput
                    label="Service Icon"
                    name="icon"
                    onChange={handleFileChange}
                    defaultFile={data.icon}
                    error={errors.icon}
                    placeholder={"Image size must be 50x50"}
                />

                <FileInput
                    label="Service image"
                    name="image"
                    onChange={handleFileChange}
                    defaultFile={data.image}
                    error={errors.image}
                    placeholder={"Image size must be 200x200"}
                />





                <div className='flex justify-between gap-5'>
                    <button
                        type="submit"
                        class="bg-blue-500 text-white px-5 py-3 rounded"
                    >
                        Create New
                    </button>
                    <Link href={route('services.index')} className='bg-red-500 text-white px-5 py-3 rounded'>
                        Cancel
                    </Link>
                </div>

            </form>
        </div>
    </MainLayout>
  )
}

export default Create
