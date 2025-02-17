import InputField from '@/Components/Form/InputField'
import FileInput from '@/Components/Form/FileInput'
import MainLayout from '@/Layouts/MainLayout'
import { useForm, Link } from '@inertiajs/react'


const Create = () => {

    const {data, setData, post, errors} = useForm({
        location : "",
        hospital_name : "",
        contact_number : "",
        notes  : ""

    });

    console.log("error_start---------------")
    console.log(errors);
    console.log("error_end---------------")


    // Handle input changes correctly
    const handleChange = (e) => {
        const { name, value, type, checked } = e.target;
        setData(name, type === "checkbox" ? checked : value);
    };




    const handleSubmit = (e) =>
    {
        e.preventDefault();
        post(route('chambers.store'), data)
        console.log(data)
    }


  return (
    <MainLayout>
        <h2 class="text-2xl font-bold">Chamber Create</h2>
        <div className='p-10 rounded-md bg-white shadow-md'>
            <form onSubmit={handleSubmit} encType="multipart/form-data" className='space-y-4'>
                <InputField label="Chamber Location" name="location" value={data.location || ""} onChange={handleChange} placeholder="Hospital Location" error={errors.location}/>
                <InputField label="Hospital Name" name="hospital_name" value={data.hospital_name || ""} onChange={handleChange} placeholder="Hospital Name" error={errors.hospital_name}/>
                <InputField label="Phone Number" name="contact_number" value={data.contact_number || ""} onChange={handleChange} placeholder="Hospital Number" error={errors.contact_number}/>
                <InputField label="Notes" name="notes" value={data.notes || ""} onChange={handleChange} placeholder="Any Notes about hospital" error={errors.notes}/>



                <div className='flex justify-between gap-5'>
                    <button
                        type="submit"
                        class="bg-blue-500 text-white px-5 py-3 rounded"
                    >
                        Create New
                    </button>
                    <Link href={route('chambers.index')} className='bg-red-500 text-white px-5 py-3 rounded'>
                        Back
                    </Link>
                </div>

            </form>
        </div>
    </MainLayout>
  )
}

export default Create
