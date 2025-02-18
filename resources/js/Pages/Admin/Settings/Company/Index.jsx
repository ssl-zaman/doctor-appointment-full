import FileInput from "@/Components/Form/FileInput";
import InputField from "@/Components/Form/InputField";
import TextareaInput from "@/Components/Form/TextareaInput";
import MainLayout from "@/Layouts/MainLayout";
import { useForm, router } from "@inertiajs/react";

const Index = ({ company_setting }) => {
  // Initialize form state with `useForm`
  const { data, setData, post, put, processing, errors } = useForm({
    ...company_setting.data,
  });

  console.log(data);

  // Handle input changes correctly
  const handleChange = (e) => {
    const { name, value, type, checked } = e.target;
    setData(name, type === "checkbox" ? checked : value);


  };

  // Handle file input change
  const handleFileChange = (e) => {
    const { name, files } = e.target;
    setData(name, files[0]);
  };


  const handleSubmit = (e) => {
    e.preventDefault();

    // Create a FormData object to handle file uploads
    const formData = new FormData();

    // Append regular fields to FormData
    Object.keys(data).forEach((key) => {
        formData.append(key, data[key]);
    });

    // Send the FormData via PUT request
    // post(route('abtest', data.id), {
    //     data: formData,
    //     forceFormData: true,  // Ensure it's sent as FormData
    // });

    router.post(route("abtest", data.id), formData );

    // post(route('abtest', data.id), {
    //     preserveScroll: true,
    //     data: formData,
    //     forceFormData: true,  // Ensure it's sent as FormData
    // }).then(() => {
    //     // Log errors after the request completes (if any)
    //     // console.log(errors);
    // });
};


  return (
    <MainLayout>
      <h2 className="text-2xl font-bold mb-3">Company Settings</h2>

      <form onSubmit={handleSubmit}  enctype="multipart/form-data" className="w-full mx-auto flex flex-col gap-10   p-10 ">

        <div className="flex gap-10">
            <div className="w-1/2 bg-white p-5 rounded-md shadow space-y-10">
                <InputField
                label="Company Name"
                name="company_name"
                value={data.company_name || ""}
                onChange={handleChange}
                placeholder="Enter company name"
                />


            <InputField
            label="Company Title"
            name="company_title"
            value={data.company_title || ""}
            onChange={handleChange}
            placeholder="Enter company title"
            />
            <InputField
            label="Phone"
            name="phone"
            value={data.phone || ""}
            onChange={handleChange}
            placeholder="Enter phone number"
            />
            <InputField
            label="Hotline"
            name="hotline"
            value={data.hotline || ""}
            onChange={handleChange}
            placeholder="Enter hotline"
            />

            <InputField
            label="Book phone number"
            name="bookbyphone"
            value={data.bookbyphone || ""}
            onChange={handleChange}
            placeholder="Enter Booking phone number"
            />

            <InputField
                label="Working Day"
                name="work_day"
                value={data.work_day || ""}
                onChange={handleChange}
                placeholder="example: Monday to Friday"
            />

            <InputField
                label="Available Time"
                name="available_time"
                value={data.available_time || ""}
                onChange={handleChange}
                placeholder="example: 9PM to 10PM"
            />


            <InputField
            label="WhatsApp"
            name="whats_app"
            value={data.whats_app || ""}
            onChange={handleChange}
            placeholder="Enter WhatsApp number"
            />
            <InputField
            label="Email"
            name="email"
            type="email"
            value={data.email || ""}
            onChange={handleChange}
            placeholder="Enter email address"
            />
            <InputField
            label="Address"
            name="address"
            value={data.address || ""}
            onChange={handleChange}
            placeholder="Enter address"
            />

            <InputField
            label="Website Link"
            name="website_link"
            type="url"
            value={data.website_link || ""}
            onChange={handleChange}
            placeholder="Enter website link"
            />

            <TextareaInput
                label="Google Location"
                name="google_tag"
                value={data.google_tag || ""}
                onChange={handleChange}
                placeholder="Enter only iframe src google map link"
            />

            <TextareaInput
            label="About"
            name="about"
            value={data.about || ""}
            onChange={handleChange}
            placeholder="Enter about text"
            />

            <FileInput
                label="Signature"
                name="signature"
                onChange={handleFileChange}
                defaultFile={data.signature}
            />

            <TextareaInput
                label="Footer Info"
                name="footer_info"
                value={data.footer_info || ""}
                onChange={handleChange}
                placeholder="Enter footer information"
            />



            </div>

            <div className="w-1/2 space-y-10 ">


            <div className=" bg-white p-5  rounded-md shadow flex flex-col gap-4">
                    <h2 className="text-2xl font-bold text-blue-500  mb-2">Socail Media Link</h2>
                        <InputField
                            label="Facebook Link"
                            name="facebook_link"
                            type="url"
                            value={data.facebook_link || ""}
                            onChange={handleChange}
                            placeholder="Enter Facebook link"
                        />
                        <InputField
                            label="YouTube Link"
                            name="youtube_link"
                            type="url"
                            value={data.youtube_link || ""}
                            onChange={handleChange}
                            placeholder="Enter YouTube link"
                        />

                        <InputField
                            label="Linkdin Link"
                            name="linkdin_link"
                            type="url"
                            value={data.linkdin_link || ""}
                            onChange={handleChange}
                            placeholder="Enter Linkdin link"
                        />
                        <InputField
                            label="X Link"
                            name="x_link"
                            type="url"
                            value={data.x_link || ""}
                            onChange={handleChange}
                            placeholder="Enter X link"
                        />

                        <InputField
                            label="Tiktok Link"
                            name="tiktok_link"
                            type="url"
                            value={data.tiktok_link || ""}
                            onChange={handleChange}
                            placeholder="Enter Tiktok link"
                        />
                        <InputField
                            label="Instagram Link"
                            name="instagram_link"
                            type="url"
                            value={data.instagram_link || ""}
                            onChange={handleChange}
                            placeholder="Enter Instagram link"
                        />



                </div>

                <div className="bg-white p-5 rounded-md shadow">
                    <h2 className="text-2xl font-bold text-blue-500 mb-2">Asset Settings</h2>
                    <FileInput
                    label="Company Logo"
                    name="company_logo"
                    onChange={handleFileChange}
                    defaultFile={data.company_logo}
                    />
                    <FileInput
                    label="Company Favicon"
                    name="company_fav_icon"
                    onChange={handleFileChange}
                    defaultFile={data.company_fav_icon}
                    />
                    <FileInput
                    label="Admin Favicon"
                    name="admin_fav_icon"
                    onChange={handleFileChange}
                    defaultFile={data.admin_fav_icon}
                    />
                </div>



            </div>
        </div>


        <div className="w-full">
            <button
            type="submit"
            disabled={processing}
            className=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full  px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
            {processing ? "Saving..." : "Update"}
            </button>
        </div>






      </form>
    </MainLayout>
  );
};

export default Index;
